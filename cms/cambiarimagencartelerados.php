<?php
include('../bd/conexion.php');


$name=$_FILES['carteleraimg']['name'];
$url='img/carteleraimg/'.rand(1,5).$name;
//var_dump($url)or die();


move_uploaded_file($_FILES['carteleraimg']['tmp_name'],'../'.$url);

mysqli_query($con,"UPDATE carteleraimagen SET ruta ='".$url."'WHERE id=2");

header('Location:admin.php');




?>