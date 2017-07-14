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

    margin-left:15px;
    margin-right: 15px;
  background-color: #f2f2f2;
    
    }
   
     form {     
               padding-top: 70px;

                 
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
#ab{

	margin-left: 10px;
}/*table
{
border-style:solid;
border-width:2px;

}*/
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #b3c2bf}
tr:nth-child(odd){background-color: white}


th {
    background-color: #3b3a36;
    color: white;
}
table {
    width: 100%;
}

th {
    height: 05px;
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

<form action="books1.php"method="POST">
<div id="contact" class="container">
  <div class="row">
    <div class="col-md-2">
         
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="sou" name="search_name" placeholder="Sem" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="Dest" name="search_name1" placeholder="Subject" type="text" required>
        </div>
      </div>
     
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Check books</button>
        </div>
      </div>  
    </div>
  </form>
<div class="container-fluid" id="ab">
</div>
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "popbooks";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['search_name']))  {                               

$search_name=$_POST['search_name'];


if(isset($_POST['search_name1']))  {

$search_name1=$_POST['search_name1'];

if(!empty($search_name)) {
	
$sql = "SELECT name,author,publication,branch FROM bookdta WHERE sem LIKE '$search_name' AND subject LIKE '%".mysql_real_escape_string($search_name1)."%'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  echo "<table >
<tr>
<th>Book Name</th>
<th>Branch</th>
<th>Author</th>
<th>Publication</th>

</tr>";
    while($row = mysqli_fetch_assoc($result)) {
       echo "<tr>";
       echo "<td>" . $row['name'] . "</td>";
       echo "<td>" . $row['branch'] . "</td>";
       echo "<td>" . $row['author'] . "</td>";
       
      echo "<td>" . $row['publication'] . "</td>";
       
       echo "</tr>";
       
    }
} else {
    echo "Books not found,please give full name of the book.";
}
}}}
mysqli_close($conn);
?>
