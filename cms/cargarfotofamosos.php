<?php include("../bd/conexion.php");


$fecha=$_POST['fechafotofamosos'];

//$fecha=Date($fecha);

//var_dump($fecha) or die();


foreach ( $_FILES['fotofa']['name'] as $name)
{
 	


//echo $name or die();
$url[]='img/fotofamosos/'.rand(1,5).$name;

}
//var_dump( count($url))or die();

foreach ( $_FILES['fotofa']['tmp_name'] as $tmp )
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

mysqli_query($con,"INSERT INTO `fotofamosos`(ruta,fecha) VALUES ('".$url[$i]."','".$fecha."')");

}




header('Location:fotofamosos.php');








?>