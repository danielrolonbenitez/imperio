<?php
include('../bd/conexion.php');
$id=$_GET['id'];
//var_dump($id)or die();
mysqli_query($con,"DELETE FROM mensajes where id='".$id."'");


header('Location:mensaje.php');


?>