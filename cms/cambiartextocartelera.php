<?php
include('../bd/conexion.php');

$texto=$_POST["carteleratext"];
//var_dump($texto);

mysqli_query($con,"UPDATE carteleratexto SET texto ='".$texto."'WHERE id=1");

header('Location:admin.php')


?>