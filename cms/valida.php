<?php
 session_start();


$email=$_POST["login-email"];
$pass=$_POST["login-password"];

if($email=="admin@admin.com" && $pass=="123456" ){
	
header('Location: admin.php');
$_SESSION["var"]="admin@admin.com";

}


else
{

	
echo"<script>alert('para iniciar session email:admin@admin.com pass:123456');</script>";
header('Location: index.php');



}









?>