<?php include("../bd/conexion.php");


$fecha=$_POST['fechafotocumple'];

//$fecha=Date($fecha);

//var_dump($fecha) or die();


foreach ( $_FILES['fotocumple']['name'] as $name)
{
 	


//echo $name or die();
$url[]='img/fotocumple/'.rand(1,5).$name;

}
//var_dump( count($url))or die();

foreach ( $_FILES['fotocumple']['tmp_name'] as $tmp )
{
 	


//echo $name or die();
$temp[]=$tmp;

}


//var_dump($temp)or die();

 $cant=count($url);

for($i=0;$i<$cant;$i++){

 

//echo $temp[$i],"<br>";
//echo $url[$i],"<br>";
move_uploaded_file($temp[$i],'../'.$url[$i]);

mysqli_query($con,"INSERT INTO `fotocumple`(ruta,fecha) VALUES ('".$url[$i]."','".$fecha."')");

}




header('Location:fotocumple.php');








?>