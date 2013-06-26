<?php
ob_start();
$server_addresss="localhost";
$username = "root";
$password = "";
$database = "weborderform";


$con=mysql_connect($server_addresss,$username,$password);


// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  
mysql_select_db($database);

?> 