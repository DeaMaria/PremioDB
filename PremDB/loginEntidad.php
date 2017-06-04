<!DOCTYPE html>
<html>

<!-- Mirrored from wp1.themexlab.com/html2/preview-human-welfare/volunteer.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Jan 2017 07:52:01 GMT -->
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

</head>

<body>


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
                                    <li><a href="index.php">Inicio</a></li>
                                    <li><a href="listaProy.php">Proyectos</a></li>
                                    <li><a href="volunteer.php">Registrar</a></li>
                                    <li><a href="loginProp.php">Proponer</a></li>
                                    <li style="display: none;"><a href="loginEval.php">Evaluar</a></li>
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
    
    
    
    <!--Volunteer Section-->
    
    
    <!--Become VOlunteer Section-->
    <section class="become-volunteer">
    	<div class="auto-container">
        	<div class="normal-title col-md-offset-5"><h3>INSERTA CREDENCIALES</h3></div>
            
            <div class="default-form">
            <?php
                // Conectar con la base de datos
                include("conexion.php");
                {

                // consulta sql
                $sql="SELECT proy.* FROM proyectosparaentidades as proy ORDER BY idProyectoEnt";
                }
                // ejecutamos la consulta sql
                $registros=mysqli_query($conexion,$sql) or die("Error en la consulta $sql");
                while ($linea=mysqli_fetch_array($registros))
                {
                    echo "<form method='post' action='loginInsEnt.php?id=$linea[idProyectoEnt]'>";
                }
                ?>
                <form method="post" action="loginInsAl.php?id=$linea[idProyecto]">
                    <div class="row clearfix">
                    
                        <div class="form-group col-md-4 col-md-offset-4 col-sm-4 col-xs-4">
                            <input type="text" name="cif" placeholder="CIF" id="cif" required>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="form-group col-md-4 col-md-offset-4 col-sm-4 col-xs-4">
                            <input type="password" name="numIdent" placeholder="Numero Identificativo" id="numIdent" class="form-control" required>
                        </div>
						
					</div>
                    <div class="row clearfix">
                        <div class="links col-md-6 col-md-offset-4 col-sm-6 col-xs-6"> 
	                        <input type="submit" value="Enviar" class="theme-btn btn-style-three">
	                    	<a href="javascript:history.back()" class="theme-btn btn-style-three">Volver</a>
	                    	<a href="volunteer.php" class="theme-btn btn-style-three">Registrarse</a>
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
                                    <div class="footer-logo"><figure><a href="index.php"><img src="images/logo-3.png" alt=""></a></figure></div>
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
                                    <a href="listaProy.php"><h2>Inscríbete</h2></a>
                                    <div class="widget-content">
                                        <div class="posts">
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                            <div class="footer-column col-md-7 col-sm-5 col-xs-12">
                                <div class="footer-widget contact-widget">
                                    <a href="create-project.php"><h2>Propón proyectos</h2></a>
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

<!-- Mirrored from wp1.themexlab.com/html2/preview-human-welfare/volunteer.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Jan 2017 07:52:04 GMT -->
</html>