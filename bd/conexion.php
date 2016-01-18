<?php
$host="localhost";
$user="root";
$pass="123456";
$bd="imperio";


$con=mysqli_connect($host,$user,$pass,$bd);
 
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error()or die();
  }


  ?>