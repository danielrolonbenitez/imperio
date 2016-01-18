<?php
include('../bd/conexion.php');
$id=$_GET['id'];

$consult=mysqli_query($con, "SELECT * FROM mensajes where id='".$id."'");

$mensaje=$consult->fetch_object();



?>

     



        
       <link rel="stylesheet" href="css/bootstrap.css">
		<meta charset="utf-8">      

      <div class="" style="margin-left:20%;margin-top:5%;padding:10px;width:500px;background:orange;">
      	 
      	 <h4 style="padding:10px;text-align:center;color:white">Mensaje</h4>
        <div class="alert-info" style="padding:10px">
        <span><strong>Nombre:</strong></span><span> <?php echo $mensaje->nombre;?></span><br>
        <span><strong>Telefono:</strong></span><span> <?php echo $mensaje->telefono;?></span><br>
        <span><strong>Email:</strong></span><span> <?php echo $mensaje->email;?></span><br>
        <span><strong>fecha:</strong></span><span> <?php echo $mensaje->fecha;?></span><br></br>
        </div>

        
        <div  style="padding:10px;width:480px;background:#dff0d8;color:#3c763d">
        	<h4>Descripción</h4>
        	<?php echo $mensaje->mensaje;?></div><br>
        <span class="btn btn-default" onclick="history.back()">Volver</span>
       <?php  echo"<a href='eliminarmensaje.php?id=".$mensaje->id."'><i class='btn btn-danger'>Eliminar</i></a>";?>
      </div>
  




<?php //header("Location:mensaje.php?");
?>









 





