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

 <!--begin galery encontrate-->
<div class="row"> 
        <div id="galery" class="col-xs-12 col-sm-12 col-lg-12">



                  <a href="#myModal" class="load-img"  data-toggle="modal"><img  class="galery-img" src="img/fotos/1.jpg"></a>



                  <a href="#myModal" class="load-img" data-toggle="modal"><img class="galery-img" src="img/fotos/2.jpg"></a>



                  <a href="#myModal" class="load-img" data-toggle="modal"><img  class="galery-img" src="img/fotos/3.jpg"></a>



                  <a href="#myModal" class="load-img"  data-toggle="modal"><img class="galery-img" src="img/fotos/4.jpg"></a>



                  <a href="#myModal" class="load-img"  data-toggle="modal"><img  class="galery-img" src="img/fotos/5.jpg"></a>


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