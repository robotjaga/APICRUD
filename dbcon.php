

<?php

//in this case i connect the Database 

$host = "localhost";
$username = "root";
$password = "";
$dbname = "phpeducation";

$conn = mysqli_connect($host, $username, $password, $dbname);


//check if Database connection succesfuly dan 
if(!$conn){


  //the code explain what error we have 
  die("connection Failed: " . mysqli_connect_error());
}


?>