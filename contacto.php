<<html>
<head>
	
<meta charset="UTF-8">
<LINK rel="stylesheet" type="text/css" href="css/main.css"></LINK>
<LINK rel="stylesheet" type="text/css" href="css/carteleratexto.css"></LINK>
<LINK rel="stylesheet" type="text/css" href="css/carteleraimg.css"></LINK>
<LINK rel="stylesheet" type="text/css" href="css/footer.css"></LINK>
<LINK rel="stylesheet" type="text/css" href="css/menu.css"></LINK>
<LINK rel="stylesheet" type="text/css" href=""></LINK>
<LINK rel="stylesheet" type="text/css" href="css/bootstrap.css"></LINK>
</head>
<body>


 <div class="container"><!--begin container-->

           <!--begin menu-->
        
      <?php include('menu.php'); ?>
        	<!--end  menu-->





 <div class="row"><!--beging form-->

      <form action="bd/cargarmensaje.php" method="post" class="form-horizontal col-lg-6 col-lg-offset-4" role="form" style="margin-top:50px;">
       			
       			<div class="form-group">
                 <input type="text" name="nombre" class="form-control" placeholder="Nombre" required />

       			</div>
       			<div class="form-group">
                 <input type="text" name="telefono" class="form-control" placeholder="Telefono" required/>

       			</div>
       			
       			<div class="form-group">
                 <input type="email" name="email" class="form-control" placeholder="Email" required/>

       			</div>
        

       			<div class="form-group">
                 <textarea  name="mensaje" class="form-control" placeholder="Mensaje" required></textarea>

       			</div>	

       				
			       			<div class="form-group" align="center" >
			       			
			       			<input type="reset" class="btn btn-warning btn-lg" style="width:150px" value="Borrar"/>
			                <input type="submit" class="btn btn-warning btn-lg" style="width:150px"  value="Aceptar"/>

			       			</div>
			       			
        



      </form>

 </div><br></br><!--end form-->

 <!--begin footer-->
 <?php include('footer.php'); ?>

 <!--end  footer-->




</div><!--end  container-->












</body>
</html>