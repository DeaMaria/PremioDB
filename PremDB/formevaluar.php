<!DOCTYPE html>
<html>

<!-- Mirrored from wp1.themexlab.com/html2/preview-human-welfare/volunteer.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Jan 2017 07:52:01 GMT -->
<head>
<meta charset="utf-8">
<title>Conecta-T a la Humanidad</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<script src="./assets/js/jquery-1.7.2.js"></script>
    <script language="javascript">
    $(document).ready(function(){
        $("#provincia").change(function () {
               $("#provincia option:selected").each(function () {
                valor=$(this).val();
                tabla="localidades";
                campo="idProvincia";    
                $.post("combos.php", { valor: valor, tabla: tabla, campo: campo  }, function(data){
                $("#localidad").html(data);
                });            
            });
       })
    });
    </script>
</head>

<body>
<?php
    include("conexion.php");
?>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
    <header class="main-header">
    	<!-- Header Top -->
    	<div class="header-top">
        	<div class="auto-container">
            	<div class="clearfix">
                    
                    <!--Top Left-->
                    <div class="top-left">
                    	<ul class="clearfix">
                        	<!-- <li><span class="icon flaticon-technology"></span>+12345 06 789</li> -->
                            <li><span class="icon flaticon-note"></span>conectaT@gmail.com</li>
                        </ul>
                    </div>
                    
                    <!--Top Right-->
                    <div class="top-right">
                    
                    	<!--social-icon-->
                        <div class="social-icon">
                        	<a href="#"><span class="fa fa-facebook"></span></a>
                            <!-- <a href="#"><span class="fa fa-youtube-play"></span></a> -->
                            <a href="#"><span class="fa fa-linkedin"></span></a>
                            <a href="#"><span class="fa fa-instagram"></span></a>
                            <a href="#"><span class="fa fa-twitter"></span></a>
                        </div>
                        
                        
                    </div>
                    
                </div>
                
            </div>
        </div><!-- Header Top End -->
        
        
        <!-- Main Box -->
    	<div class="main-box">
        	<div class="auto-container">
            	<div class="outer-container clearfix">
                    <!--Logo Box-->
                    <div class="logo-box">
                        <div class="logo"><!-- <a href="index-2.html"> --><img src="images/logo-proyecto.jpg" alt=""></a></div>
                    </div>
                    
                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->    	
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                            </div>
                            
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li><a href="index.html">Inicio</a></li>
                                    <li><a href="single-cause.html">Proyectos</a></li>
                                    <li><a href="volunteer.php">Registrar</a></li>
                                    <li><a href="loginProp.html">Proponer</a></li>
                                    <li><a href="loginEval.php">Evaluar</a></li>
                                 </ul>
                            </div>
                        </nav><!-- Main Menu End-->
                        
                    </div><!--Nav Outer End-->
                    
                    <!-- Hidden Nav Toggler -->
                    <div class="nav-toggler">
                    <button class="hidden-bar-opener"><span class="icon fa fa-bars"></span></button>
                    </div><!-- / Hidden Nav Toggler -->
                    
            	</div>    
            </div>
        </div>
    
    </header>
    <!--End Main Header -->
    
    
    <!-- Hidden Navigation Bar -->
    <!-- / Hidden Bar -->
    
    <!--Page Title-->
    <section class="page-title" style="background-color: black;">
        <div class="auto-container">
            <h1>Evaluar alumno</h1>
            
        </div>
    </section>
    
    
    
    
    <!--Become VOlunteer Section-->
    <section class="become-volunteer">
    	<div class="auto-container">
        	<div class="normal-title"><h3>Evalúa a tus aumnos</h3></div>
            
            <div class="default-form">
                <div class='row'>
            <div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>
                <div class="form-group">
                        <label for="fecInicio">Nombre del proyecto:</label><label>Apadrina un río</label>
                </div>
            </div>
            <div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>
                <div class="form-group">
                        <label for="fecFin">Nombre del alumno:</label><label>María Pérez</label>
                </div>
             </div>
            </div>
                <form method="post" action="#">           
                    <div class='row'>
                        <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                            <div class="form-group">
                                    <label for="actitud">Actitud:</label>
                                    
                                    <input type="radio" name="actitud" value="1"> 1
                                    <input type="radio" name="actitud" value="2"> 2
                                    <input type="radio" name="actitud" value="3"> 3
                                    <input type="radio" name="actitud" value="4"> 4
                                    <input type="radio" name="actitud" value="5"> 5
                                    
                            </div>
                        </div>
                        <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                            <div class="form-group">
                                    <label for="interes">Interés:</label>
                                    
                                    <input type="radio" name="interes" value="1"> 1
                                    <input type="radio" name="interes" value="2"> 2
                                    <input type="radio" name="interes" value="3"> 3
                                    <input type="radio" name="interes" value="4"> 4
                                    <input type="radio" name="interes" value="5"> 5
                                    
                            </div>
                        </div>
                        <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                            <div class="form-group">
                                    <label for="competencias">Competencias:</label>
                                    
                                    <input type="radio" name="competencias" value="1"> 1
                                    <input type="radio" name="competencias" value="2"> 2
                                    <input type="radio" name="competencias" value="3"> 3
                                    <input type="radio" name="competencias" value="4"> 4
                                    <input type="radio" name="competencias" value="5"> 5
                                    
                            </div>
                        </div>
                        <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                            <div class="form-group">
                                <a href="#" class="theme-btn btn-style-three">Guardar</a>
                            </div>
                            <div class="form-group">
                                <a href="#" class="theme-btn btn-style-three">Imprimir Certificado</a>
                            </div>
                        </div>
                    </div>
                </form>
                
            </div>
            <br><br>
            <div class="default-form">
                <div class='row'>
                    <div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>
                        <div class="form-group">
                                <label for="fecInicio">Nombre del proyecto:</label><label>Apadrina un río</label>
                        </div>
                    </div>
                    <div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>
                        <div class="form-group">
                                <label for="fecFin">Nombre del alumno:</label><label>Andreea Birsan</label>
                        </div>
                     </div>
                </div>
                <form method="post" action="#">           
                    <div class='row'>
                        <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                            <div class="form-group">
                                    <label for="actitud">Actitud:</label>
                                    
                                    <input type="radio" name="actitud" value="1"> 1
                                    <input type="radio" name="actitud" value="2"> 2
                                    <input type="radio" name="actitud" value="3"> 3
                                    <input type="radio" name="actitud" value="4"> 4
                                    <input type="radio" name="actitud" value="5"> 5
                                    
                            </div>
                        </div>
                        <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                            <div class="form-group">
                                    <label for="interes">Interés:</label>
                                    
                                    <input type="radio" name="interes" value="1"> 1
                                    <input type="radio" name="interes" value="2"> 2
                                    <input type="radio" name="interes" value="3"> 3
                                    <input type="radio" name="interes" value="4"> 4
                                    <input type="radio" name="interes" value="5"> 5
                                    
                            </div>
                        </div>
                        <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                            <div class="form-group">
                                    <label for="competencias">Competencias:</label>
                                    
                                    <input type="radio" name="competencias" value="1"> 1
                                    <input type="radio" name="competencias" value="2"> 2
                                    <input type="radio" name="competencias" value="3"> 3
                                    <input type="radio" name="competencias" value="4"> 4
                                    <input type="radio" name="competencias" value="5"> 5
                                    
                            </div>
                        </div>
                        <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                            <div class="form-group">
                                <a href="#" class="theme-btn btn-style-three">Guardar</a>
                            </div>
                            <div class="form-group">
                                <a href="#" class="theme-btn btn-style-three">Imprimir Certificado</a>
                            </div>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </section>
    
    <!--Main Footer-->
    <footer class="main-footer">
        <div class="auto-container">
        
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row clearfix">
                    <!--Big Column-->
                    <div class="big-column col-md-4 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                            
                            <!--Footer Column-->
                            <div class="footer-column col-md-12 col-sm-12 col-xs-12">
                                <div class="footer-widget about-widget">
                                    <div class="footer-logo"><figure><a href="index.html"><img src="images/logo-3.png" alt=""></a></figure></div>
                                    <div class="widget-content">
                                        
                                        <div class="social-links">
                                            <a href="#"><span class="fa fa-facebook-f"></span></a>
                                            <a href="#"><span class="fa fa-twitter"></span></a>
                                            <a href="#"><span class="fa fa-linkedin"></span></a>
                                            <a href="#"><span class="fa fa-google-plus"></span></a>
                                            <a href="#"><span class="fa fa-skype"></span></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <!--Big Column-->
                    <div class="big-column col-md-4 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                            
                            <!--Footer Column-->
                            <div class="footer-column col-md-5 col-sm-5 col-xs-12">
                                <div class="footer-widget posts-widget">
                                    <a href="single-cause.html"><h2>Inscríbete</h2></a>
                                    <div class="widget-content">
                                        <div class="posts">
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                            <div class="footer-column col-md-7 col-sm-5 col-xs-12">
                                <div class="footer-widget contact-widget">
                                    <a href="loginProp.html"><h2>Propón proyectos</h2></a>
                                    <div class="widget-content">
                                        <div class="posts">
                                           
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    
                    <!--Big Column-->
                    <div class="big-column col-md-4 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                            
                            <!--Footer Column-->
                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                <div class="footer-widget posts-widget">
                                    <a href="volunteer.php"><h2>Regístrate</h2></a>
                                    <div class="widget-content">
                                        <div class="posts">
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                <div class="footer-widget contact-widget">
                                    <h2>Contáctanos</h2>
                                    <div class="widget-content">
                                        <ul class="contact-info">
                                            <li>conectaT@gmail.com </li>
                                        </ul>
                                        
                                        <!--Newsletter One-->
                                       
                                    
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    
                 </div>
             </div>
        
        </div>
        
        <!--Footer Bottom-->
         <div class="footer-bottom">
            <div class="auto-container">
                <div class="copyright-text">Copyright &copy; 2017. All Rights Reserved CONECTA-T A LA HUMANIDAD</div>
            </div>
        </div>
    </footer>
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>


<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
</body>

<!-- Mirrored from wp1.themexlab.com/html2/preview-human-welfare/volunteer.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Jan 2017 07:52:04 GMT -->
</html>