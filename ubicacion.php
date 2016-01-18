<!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
     <LINK rel="stylesheet" type="text/css" href="css/main.css"></LINK>
      <LINK rel="stylesheet" type="text/css" href="css/menu.css"></LINK>
      <LINK rel="stylesheet" type="text/css" href="css/banner.css"></LINK>
     <LINK rel="stylesheet" type="text/css" href="css/bootstrap.css"></LINK>
    <LINK rel="stylesheet" type="text/css" href="css/ubicacion.css"></LINK>
    <LINK rel="stylesheet" type="text/css" href="css/footer.css"></LINK>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/ubicacion.js"></script>
    <script type="text/javascript" src="js/menu.js"></script>
    
</head>
 

  <body>
    <div class="container">
 <!--begin menu-->
             <?php include('menu.php');?>
  <!-- end menu-->


 <!-- begin mapa -->
       <div class="row"> 
          <div id="mapa" class="col-lg-12" ></div>
      </div><br></br>
<!-- end  mapa -->


<!-- begin foorter-->
<?php include('footer.php');?>
<!-- end  foorter-->

</div><!--end container-->



  </body>

</html>