















<?php session_start();$var=isset($_SESSION['var']);?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<?php  if($var=="admin@admin.com"){?>


<head>
    <meta charset="utf-8">

    <title>IMPERIO</title>

    <meta name="description" content="FlatApp is a Premium, Responsive and Flat Bootstrap Admin Dashboard Template created by pixelcave and published on Themeforest.">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="img/icon_crc.png">
    <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
    <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
    <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
    <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
    <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
    <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
    <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Bootstrap is included in its original form, unaltered -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Related styles of various icon packs and javascript plugins -->
    <link rel="stylesheet" href="css/plugins.css">

    <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
    <link rel="stylesheet" href="css/main.css">

    <!-- Load a specific file here from css/themes/ folder to alter the default theme of the template -->

    <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
    <link rel="stylesheet" href="css/themes.css">
    <!-- END Stylesheets -->

    <!-- Modernizr (browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it, eg IE8) -->
    <script src="js/vendor/modernizr-2.7.1-respond-1.4.2.min.js"></script>
</head>

<!-- Body -->
<!-- In the PHP version you can set the following options from the config file -->
<!-- Add the class .hide-side-content to <body> to hide side content by default -->
<body>

  
   <!-- Page Container -->
   <!-- In the PHP version you can set the following options from the config file -->
   <!-- Add the class .full-width for a full width page -->
   <div id="page-container" class="full-width">
    <!-- Header -->
    <!-- In the PHP version you can set the following options from the config file -->
    <!-- Add the class .navbar-fixed-top or .navbar-fixed-bottom for a fixed header on top or bottom respectively -->
    <!-- If you add the class .navbar-fixed-top remember to add the class .header-fixed-top to <body> element! -->
    <!-- If you add the class .navbar-fixed-bottom remember to add the class .header-fixed-bottom to <body> element! -->
    <!-- <header class="navbar navbar-inverse navbar-fixed-top"> -->
    <!-- <header class="navbar navbar-inverse navbar-fixed-bottom"> -->
    <header class="navbar navbar-inverse">
        <!-- div#row -->
        <div class="row">
            <!-- Sidebar Toggle Buttons (Desktop & Tablet)bonton que despliega el menu -->
            <div class="col-sm-4 hidden-xs">
                <ul class="navbar-nav-custom pull-left">
                    <!-- Desktop Button (Visible only on desktop resolutions) -->
                    <li class="visible-md visible-lg">
                        <a href="javascript:void(0)" id="toggle-side-content">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                    <!-- END Desktop Button -->

                    <!-- Divider -->
                    <li class="divider-vertical"></li>
                </ul>
            </div>
            <!-- END Sidebar Toggle Buttons -->

            <!-- Logo -->
                    <!--    <a href="index.html" class="navbar-brand">
                            <img src="img/template/logo.png" alt="logo">
                        </a>-->
                        <!-- END Logo -->

                        <!-- Loading Indicator, Used for demostrating how loading of notifications could happen, check main.js - uiDemo() -->
                        <div id="loading" class="display-none"><i class="fa fa-spinner fa-spin"></i></div>
                    </div>
                    <!-- END Brand and Search Section -->

                    <!-- Header Nav Section -->
                    <div id="header-nav-section" class="col-sm-4 col-xs-12 clearfix">
                        <!-- Header Nav -->
                        <ul class="navbar-nav-custom pull-right">
                            <!-- Theme Options, functionality initialized at main.js - templateOptions() -->
                            
                        </div>
                        <!-- END div#row -->
                    </header>
                    <!-- END Header -->

                    <!-- Left Sidebar -->
                    <!-- In the PHP version you can set the following options from the config file -->
                    <!-- Add the class .sticky for a sticky sidebar -->
                    <aside id="page-sidebar" class="collapse navbar-collapse navbar-main-collapse">
                <!--
                Wrapper for scrolling functionality
                Used only if the .sticky class added above. You can remove it and you will have a sticky sidebar
                without scrolling enabled when you set the sidebar to be sticky
            -->
            <div class="side-scrollable">
                <!-- Mini Profile  aqui van los botones del mini profiles-->
                <div class="mini-profile">
                    <div class="mini-profile-options">
                     
                      
                        <!-- Modal div is at the bottom of the page before including javascript code, we use .enable-tooltip class for the tooltip because data-toggle is used for modal -->
                        <a href="#">
                            &nbsp;
                        </a>
                        <!--aqui boton logout-->
                        <a href="index.php" class="badge badge-danger"  >
                            <i class="fa fa-sign-out" data-toggle="tooltip" title="Salir"></i>
                        </a>
                    </div>
                    <a href="page_ready_user_profile.html">
                        <img src="img/logo.png" alt="" class="">
                    </a>
                </div>
                <!-- END Mini Profile -->
              
                <!-- Sidebar Tabs aqui va lo de botones de  arriba de navegacion nav-->
                <div class="sidebar-tabs-con">
                 
                    <div class="tab-content">
                        <div class="tab-pane active" id="side-tab-menu">
                            <!-- Primary Navigation //aui va las aciones del menu-->
                            <nav id="primary-nav">
                                <ul>
                                    
                                    <!-- aqui va los link del menu-->
                                    <li>

                                      <a href="admin.php"><i class="fa fa-home"></i>
                                        Inicio</a> 
                                         
                                        <a href="fotocumple.php"><i class="fa fa-camera"></i>
                                        Fotos Cumpleaños</a> 
                                        
                                         <a href="fotoboliche.php"><i class="fa fa-camera"></i>
                                        Fotos Boliche</a>

                                         <a href="fotofamosos.php"><i class="fa fa-camera"></i>
                                        Fotos Famosos</a>


                                        <a href="mensaje.php"><i class="fa fa-envelope"></i>
                                        Mensajes</a>
                                    </li>

                                    <?php ?>
                                    
                                    
                                    
                                </ul>
                                
                                
                            </nav>
                            <!-- END Primary Navigation -->
                        </div>
                        
                    </div>
                    <!-- END Sidebar Tabs -->
                </div>
                <!-- END Wrapper for scrolling functionality -->
            </aside>
            <!-- END Left Sidebar -->

            <!-- Pre Page Content -->
            <div id="pre-page-content">
                
               
                 <div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Fotos Boliche!</strong> En Esta Pagina Podra Cargar Las Fotos Tomadas En Imperio La Disco.
                  </div>
                  <div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Ayuda!</strong> 
                        <p>Puede subir varias fotos a la vez click en elejir archivo mantega presionado ctrl o shif para seleccion multiple</p> 
                        <p>o mantener  click y expanda el cuadro para seleccionar varios archivos.</p>
                        <p>las fotos se categoriza y agrupan por fecha para su posterior busqueda </p> 
                        <p> si cargo hoy con la fecha 22/05/2015 y la semana que viene con la misma fecha 22/05/2015 las fotos perteneceran a esta fecha </p>   
                  </div>

            </div>
            <!-- END Pre Page Content -->

            <!-- Page Content -->
            <div id="page-content">
                  
                <!--begin cargar fotos cumpleañeros -->


                <form action="cargarfotoboliche.php" method="post" enctype="multipart/form-data">
                <input class="btn btn-warning" name="fechafotoboliche" type="date"  required/>
                  <input class="btn btn-warning" name="fotobo[]" type="file" multiple required/>
                        <input class="btn btn-warning" type="submit" value="Aceptar" />




                </form>






               


        </div>
        <!-- END Page Container -->
                 <!-- Scroll to top link, check main.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-chevron-up"></i></a>

 

        <!-- Excanvas for Flot (Charts plugin) support on IE8 -->
        <!--[if lte IE 8]><script src="js/helpers/excanvas.min.js"></script><![endif]-->

        <!-- Get Jquery library from Google but if something goes wrong get Jquery from local file - Remove 'http:' if you have SSL -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

        <!-- Bootstrap.js -->
        <script src="js/vendor/bootstrap.min.js"></script>

        <!-- Jquery plugins and custom javascript code -->
        <script src="js/plugins.js"></script>       
      
        <script src="js/main.js"></script>
        
       


<script type="text/javascript"> 
       // $('.open').click(function(){

          //  $("#myModal").modal('show');

            //});


        </script>
 









 
       

    </body>
    </html>

    <?php }else echo "debe estar logeado para ver esta pagina";?>

  