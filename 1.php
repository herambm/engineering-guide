<?php
session_start();
require_once("class.user.php");
$login = new USER();

if($login->is_loggedin()!="")
{
	$login->redirect('front.php');
}

if(isset($_POST['btn-login']))
{
	$uname = strip_tags($_POST['txt_uname_email']);
	$umail = strip_tags($_POST['txt_uname_email']);
	$upass = strip_tags($_POST['txt_password']);
		
	if($login->doLogin($uname,$umail,$upass))
	{
		$login->redirect('front.php');
	}
	else
	{
		$error = "Wrong Details !";
	}	
}

if(isset($_POST['btn-signup']))
{
  $uname = strip_tags($_POST['txt_uname']);
  $umail = strip_tags($_POST['txt_umail']);
  $upass = strip_tags($_POST['txt_upass']); 
  
  if($uname=="")  {
    $error[] = "provide username !";  
  }
  else if($umail=="") {
    $error[] = "provide email id !";  
  }
  else if(!filter_var($umail, FILTER_VALIDATE_EMAIL)) {
      $error[] = 'Please enter a valid email address !';
  }
  else if($upass=="") {
    $error[] = "provide password !";
  }
  else if(strlen($upass) < 6){
    $error[] = "Password must be atleast 6 characters"; 
  }
  else
  {
    try
    {
      $stmt = $user->runQuery("SELECT user_name, user_email FROM users WHERE user_name=:uname OR user_email=:umail");
      $stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
      $row=$stmt->fetch(PDO::FETCH_ASSOC);
        
      if($row['user_name']==$uname) {
        $error[] = "sorry username already taken !";
      }
      else if($row['user_email']==$umail) {
        $error[] = "sorry email id already taken !";
      }
      else
      {
        if($user->register($uname,$umail,$upass)){  
          $user->redirect('sign-up.php?joined');
        }
      }
    }
    catch(PDOException $e)
    {
      echo $e->getMessage();
    }
  } 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>


    <<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>INFONGINEERING LOGIN</title>

    
    <link href="css/bootstrap.min.css" rel="stylesheet">

  
    <link href="css/full-slider.css" rel="stylesheet">


<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   <style>
h3 {
    font-family: "Times New Roman", Times, serif;
    font-weight: bold;
    color:#f2f2f2;
}
   .carousel-inner > .item > img{
      width: 100%;
      height:100%;
     
    top: 0px;
    left: 0px;
    z-index: 0;
      
  }
 
  .carousel-inner > .item > a > img {
      width: 100%;
      height:100%;
      
  }

  </style>
</head>

<body>
<style type="text/css">a {text-decoration: none}</style>
    <nav class="navbar navbar-inverse navbar-fixed-top ">
  <div class="container-fluid">
    <div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a href="#" class="navbar-brand" >INFONGINEERING</a>
    </div>

 <div class="collapse navbar-collapse" id="myNavbar">
      
      <ul class="nav navbar-nav navbar-right">
    
    
        <div class="navbar-form navbar-right" id="bs-example-navbar-collapse-1">
     
       <form class="form-signin" method="post" id="login-form">
   
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="text" type="text" class="form-control" name="txt_uname_email" value="" placeholder="Email Address">                                        
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control" name="txt_password" value="" placeholder="Password">   
                  </div>

                        <button type="submit" name="btn-login" class="btn btn-primary">Login</button>
                        <!--<button type="submit" id="myBtn" class="btn btn-primary">Signup</button>-->
                        <a href="sign-up.php" class="btn btn-primary" role="button">Signup</a>
                   </form>
     
    </div>
      </ul>
    </div>
  </div>
</nav>

    <!-- Navigation -->
 <div id="myCarousel" class="carousel slide" >

        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
             <li data-target="#myCarousel" data-slide-to="3"></li>
            
        </ol>

        
        <div class="carousel-inner">
            <div class="item ">
               
                <div class="fill" style="background-image:url('10.jpg');"></div>
                <div class="carousel-caption">
                    <h3>"Eager to know what you'll learn this semester? Check the syllabus prescribed by Mumbai university."</h3>
                </div>
            </div>
             <div class="item">
               
                <div class="fill" style="background-image:url('8.jpg');"></div>
                <div class="carousel-caption">
                    <h3>"Everything you want to know about any college under the sun. Straight from the students' mouths. We have it all here!"</h3>
                </div>
            </div>
            <div class="item active">
                
                <div class="fill" style="background-image:url('vjti.jpg');"></div>
                <div class="carousel-caption">
                    <h3>Over 500 Mumbai University Question Papers!If you haven't figured out already, we'll tell you - THIS is what you need to pass."</h3>
                </div>
            </div>
           
        </div>

        
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </div>
    

 

      


    <!-- Page Content -->
   
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })

</script>

</body>  


</html>
