<html>
<head>
<meta charset="UTF-8">
<LINK rel="stylesheet" type="text/css" href="css/main.css"></LINK>
<LINK rel="stylesheet" type="text/css" href="css/carteleratexto.css"></LINK>
<LINK rel="stylesheet" type="text/css" href="css/carteleraimg.css"></LINK>
<LINK rel="stylesheet" type="text/css" href="css/footer.css"></LINK>
<LINK rel="stylesheet" type="text/css" href="css/menu.css"></LINK>
<LINK rel="stylesheet" type="text/css" href=""></LINK>
<LINK rel="stylesheet" type="text/css" href="css/bootstrap.css"></LINK>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="//js/menu.js"></script>
</head>
<body>
<div class="container">
               <?php include('bd/conexion.php');?>
               
              <!--begin menu-->
             <?php include('menu.php');?>
              <!-- end menu-->

                    <!--begin cartelera texto-->
          <div class="row">
                <div class="cartelera-text col-xs-12" >
                   <?php $consul=mysqli_query($con,'SELECT * FROM carteleratexto'); $texto=$consul->fetch_object(); ?>

                   <span id="anim" class="neon"><?php echo $texto->texto ?></span>

                </div>
            </div>

                    <!--end cartelera texto-->

                    <!--begin cartelera imagenes -->
                        <!--cartelera 1-->
                <div id="uno" class="row">
                      <?php $consul=mysqli_query($con,"SELECT * FROM carteleraimagen where id='1' "); $imagen=$consul->fetch_object(); ?>
					            <img src="<?php echo $imagen->ruta; ?>" class="col-lg-12  col-xs-12 img-cartelera" ></img>

                </div>

                      <!--cartelera 2-->
                    <div class="row"> <!--row 2 y 3-->
                                   <span id="dos" >
                                      <?php $consul=mysqli_query($con,"SELECT * FROM carteleraimagen where id='2'"); $imagen=$consul->fetch_object(); ?>
                                      <img src="<?php echo $imagen->ruta; ?>" class="col-lg-6  col-xs-12 img-cartelera" ></img>

                                </span>
                                    

                  <!--cartelera 3-->
                               <span id="tres">
                                  <?php $consul=mysqli_query($con,"SELECT * FROM carteleraimagen where id='3'"); $imagen=$consul->fetch_object(); ?>
                                  <img src="<?php echo $imagen->ruta; ?>" class="col-lg-6  col-xs-12 img-cartelera" ></img>

                            </span>
                    </div>
					  

                            


                           <!-- begin reproductor-->


                             <!--end reproductor-->



                          <!--begin footer-->
                             <?php include('footer.php');?>
                            <!--*end footer-->


</div><!--end container-->






</body>

</html>