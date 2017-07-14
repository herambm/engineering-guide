<?php require_once("session.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>thenewboston</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

     <style>
    body{

    margin-left: 15px;
    margin-right: 15px;
   background-color: #f2f2f2;
    }
   
     form {     padding-top: 70px;

                
                margin:20px auto;

}
/*.search {
                padding:8px 15px;
                background:rgba(50, 50, 50, 0.2);
                border:0px solid #dbdbdb;
}
.button {
                position:relative;
                padding:6px 15px;
                left:-8px;
                border:2px solid #207cca;
                background-color:#207cca;
                color:#fafafa;
}
.button:hover  {
                background-color:#fafafa;
                color:#207cca;
}*/
/*#ab{

    margin-left: 10px;
}*/

.stylish-input-group .input-group-addon{
    background: white !important; margin: 0 auto;
}
.stylish-input-group .form-control{
    border-right:0; 
    box-shadow:0 0 0; 
    border-color:#ccc;
    margin: 0 auto;
    
}
.stylish-input-group button{
    border:0;
    background:transparent;
}
</style></head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="front.php">INFONGINEERING</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right"><li><a href="logout.php?logout=true"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li></ul>
      </div>
    </div>
  </div>
</nav>
<!--<nav class="navbar navbar navbar-inverse navbar-fixed-top">
   <div class="container-fluid">
     <div class="navbar-header" >

          <a href="front.php" class="navbar-brand">INFONGINEERING</a>
     </div></div></nav>
  <ul class="nav navbar-nav">
   <li><a href="logout.php?logout=true"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li></ul>-->
<form action="clg.php" method="POST">
<!--College Name:<input type="text" name="search_name"><input type="submit" value="search">-->

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <div id="imaginary_container"> 
                <div class="input-group stylish-input-group">
                    <input type="text" class="form-control"  placeholder="Search College" name="search_name" required>
                    <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>  
                    </span>
                </div>
            </div>
        </div>
    </div>
</div></form>
<div class="container-fluid" id="ab">
</div>
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "collegereviews";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['search_name']))  {                               

$search_name=$_POST['search_name'];

if(!empty($search_name)) {
    



$sql = "SELECT * FROM reviews WHERE College_Name LIKE '%".mysql_real_escape_string($search_name)."%'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  
    while($row = mysqli_fetch_assoc($result)) {
          echo  "<strong>Name:</strong> " . $row["College_Name"]. " <br><br><strong>Location:</strong>" . $row["Location"]. "<br><br><strong>Infrastructure:</strong>".$row["Infrastructure"]."<br><br><strong>Fees:</strong>".$row["Fees"]."<br><br><strong>Placements:</strong>".$row["Placements"]."<br><br><strong>Contact Adderess:</strong>".$row["Cadd"]."<br><br><strong>Verdict:</strong>".$row["Verdict"]."<br>";
       
    }
} else {
    echo "0 results";
}
}}
mysqli_close($conn);
?>
