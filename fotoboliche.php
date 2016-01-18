
<html>
<head>
<meta charset="UTF-8">
<LINK rel="stylesheet" type="text/css" href="css/main.css"></LINK>
<LINK rel="stylesheet" type="text/css" href="css/menu.css"></LINK>
<LINK rel="stylesheet" type="text/css" href="css/banner.css"></LINK>
<LINK rel="stylesheet" type="text/css" href="css/bootstrap.css"></LINK>
<LINK rel="stylesheet" type="text/css" href="css/galery.css"></LINK>
<LINK rel="stylesheet" type="text/css" href="css/footer.css"></LINK>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/menu.js"></script>
<script src="js/galery.js"></script>





</head>
<body>
<div class="container">
 <!--begin menu-->
             <?php include('menu.php');?>
<!-- end menu-->

 <!--begin galery cumple-->
 <?php include('bd/conexion.php');?>

<div class="row"> 
        <div id="galery" class="col-xs-12 col-sm-12 col-lg-12">

                

                  <!--obtengo las fotos de la ultima fecha cargada-->
                  <?php

                   if (isset($_POST["fecha"])){

                      $fecha=$_POST["fecha"];

                   
                      //busco  la fecha que viene cargado por el formulario  //
                   $feif=mysqli_query($con,"SELECT * FROM fotocumple  WHERE fecha='".$fecha."'");
                  
                   //var_dump($feif)or die();

                    //verifico si feif tiene algo  de caso contrario imprimo  no hay fotos para esta fecha //   
               
                  if($feif->num_rows){
                   $fif=$feif->fetch_object();

                      echo  "<div id='titulocumple'>

                 
                  <span>Fotos Cumpleaños Fecha</span><span>,$fif->fecha,</span> 

                  <form action='' method='post'>
                    
                    <input class='' type='date' name='fecha'  size='100px' required/>    
                   
                    <input class='btn btn-warning' type='submit' value='buscar'></input>
                  </form>
                 </div>";
              //end fecha//



                       $co=mysqli_query($con,"SELECT * FROM fotocumple  WHERE fecha='".$fecha."'");
                  
  
                      while ($fotocumpleif=$co->fetch_object()) { 

                     







                     echo "<a href='#myModal' class='load-img'  data-toggle='modal'><img  class='galery-img' src='".$fotocumpleif->ruta."'></a>";
                     


                     }}else{ 

                                                echo  "<div id='titulocumple'>

                                                       
                                                        <span>Fotos Cumpleaños Fecha</span><span>,$fecha,</span> 

                                                        <form action='' method='post'>
                                                          
                                                          <input class='' type='date' name='fecha'  size='100px' required/>    
                                                         
                                                          <input class='btn btn-warning' type='submit' value='buscar'></input>
                                                        </form>
                                                       </div>";
                                                    //end fecha//


                                                   echo"No Hay Fotos Para Mostrar En Esta Fecha "; }//por falso imprimo no hay fotos



                   }else{



                   
                 
                
                  //inprimo la fecha //
                        $fe=mysqli_query($con,"SELECT * FROM fotocumple  WHERE fecha=(SELECT MAX(fecha) FROM fotocumple)");
                   $feend=$fe->fetch_object();

                      echo  "<div id='titulocumple'>

                 
                  <span>Fotos Cumpleaños Fecha</span><span>,$feend->fecha,</span> 

                  <form action='' method='post'>
                    
                    <input class='' type='date' name='fecha'  size='100px' required/>    
                   
                    <input class='btn btn-warning' type='submit' value='buscar'></input>
                  </form>
                 </div>";
              //end fecha//  


                    $consult=mysqli_query($con,"SELECT * FROM fotocumple  WHERE fecha=(SELECT MAX(fecha) FROM fotocumple)");



                   while ($fotocumple=$consult->fetch_object()){ 


                       echo "<a href='#myModal' class='load-img'  data-toggle='modal'><img  class='galery-img' src='".$fotocumple->ruta."'></a>";
                     


                 
                   }} ?><!--end while and else-->

          </div>
</div>
 <!-- end  galery encontrate-->


<!--begin pagination-->





<!--end pagination-->















<!-- begin Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
       <div class="modal-header" >
         <i class="glyphicon glyphicon-remove" data-dismiss="modal" ></i>
      </div>
      <div class="modal-body text-center">
          <img  id="view-img"src="" width="80%" height="80%" />
       
      </div>
    </div>
  </div>
</div>
<!-- end Modal -->
<!---begin footer-->
<?php include('footer.php'); ?>

<!---begin end footer footer-->

</div><!--end container-->


</body>

</html>	