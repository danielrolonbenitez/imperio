<?php
include('conexion.php');

$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$mensaje=$_POST['mensaje'];


mysqli_query($con,"INSERT INTO mensajes (nombre,telefono,email,mensaje)values('".$nombre."','".$telefono."','".$email."','".$mensaje."')");


header('Location:../contacto.php')

?>