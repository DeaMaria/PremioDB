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
        $("#comunidadEnti").change(function () {
               $("#comunidadEnti option:selected").each(function () {
                valor=$(this).val();
                tabla="provincias";
                campo="idComunidad";    
                $.post("combos.php", { valor: valor, tabla: tabla, campo: campo  }, function(data){
                $("#provinciaEnti").html(data);
                });            
            });
       })
        $("#comunidadCol").change(function () {
               $("#comunidadCol option:selected").each(function () {
                valor=$(this).val();
                tabla="provincias";
                campo="idComunidad";    
                $.post("combos.php", { valor: valor, tabla: tabla, campo: campo  }, function(data){
                $("#provinciaCol").html(data);
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
    <section class="page-title" style="background-color: black;">
        <div class="sec-title centered">
            <h1>Nuevo Proyecto</h1>
            <div class="separator"></div>            
        </div>
    </section>
    
    
    <!--Volunteer Section-->
    <section class="volunteer-section">
    	<div class="auto-container">
            
            <div class="row clearfix">
            	<!--Content Column-->
            	<div class="content-column col-md-7 col-sm-6 col-xs-12">
                    <div class="inner-box">
                    	<div class="bold-text">Crea aquí tu nueva proposición de proyecto.</div>
                        <div class="text">Rellena el siguiente formulario para exponer el proyecto que deseas realizar y así poder obtener algún tipo de colaboración y ayuda. Descríbelo lo más detalladamente posible para que así resulte más sencillo el entendimiento y facilitar las futuras colaboraciones.</div>
                    </div>
                </div>
                
                <!--How To Column-->
            	<div class="how-to-column col-md-5 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="default-title"><h3>COMO HACERLO</h3></div>
                        <!--Info Block-->
                        <div class="info-block">
                            <div class="inner">
                                <div class="icon-box wow fadeIn" data-wow-duration="1500ms" data-wow-delay="0ms"><span class="flaticon-user-1"></span><span class="left-top-span"></span><span class="right-top-span"></span><span class="left-bottom-span"></span><span class="right-bottom-span"></span></div>
                                <h4>REGISTRATE</h4>
                                <div class="text">Date de alta en nuestra web introduciendo los datos de tu entidad.</div>
                            </div>
                        </div>
                        
                        <!--Info Block-->
                        <div class="info-block">
                            <div class="inner">
                                <div class="icon-box wow fadeIn" data-wow-duration="1500ms" data-wow-delay="300ms"><span class="flaticon-list-1"></span><span class="left-top-span"></span><span class="right-top-span"></span><span class="left-bottom-span"></span><span class="right-bottom-span"></span></div>
                                <h4>PROPÓN UN PROYECTO</h4>
                                <div class="text">Completa el formulario para proponer tu proyecto.</div>
                            </div>
                        </div>
                        
                        <!--Info Block-->
                        
                        <!--Info Block-->
                        
                    </div>
                </div>
                
            </div>       
        </div>
    </section>
    
    
    <!--Become VOlunteer Section-->
    <section class="become-volunteer">
    	<div class="auto-container">
        	<div class="normal-title"><h3>Propón un nuevo proyecto</h3></div>
            
            <div class="default-form">
                <form method="post" action="insproyecto.php">           
                    <div class='row'>
                        <div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>
                            <div class="form-group">
                                    <label for="nomProyecto">Nombre del proyecto:</label> <input type="text" placeholder="Nombre del proyecto" id="nomProyecto" name="nomProyecto" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                            <div class="form-group">
                                    <label for="fecInicio">Fecha de inicio:</label> <input type="date" id="fecInicio" name="fecInicio" placeholder="YYYY-MM-DD" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}"/>
                            </div>
                        </div>
                        <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                            <div class="form-group">
                                    <label for="fecFin">Fecha de fin:</label> <input type="date" id="fecFin" name="fecFin" placeholder="YYYY-MM-DD" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}"/>
                            </div>
                         </div>
                    </div>

                    <div class='row'>
                        <div class='col-xs-4 col-sm-4 col-md-4 col-lg-4'>
                            <div class="form-group">
                                    <label for="numParticipantes">Número de Participantes:</label><input type="number" min="2" step="1" value="0" name="numParticipantes" id="numParticipantes" />
                            </div>
                        </div>
                        <div class='col-xs-4 col-sm-4 col-md-4 col-lg-4'>
                            <div class="form-group">
                                    <label for="edadMinima">Edad Mínima:</label> <input type="number" min="2" max="30" step="1" value="0" name="edadMinima" id="edadMinima" />
                            </div>
                        </div>
                        <div class='col-xs-4 col-sm-4 col-md-4 col-lg-4'>
                            <div class="form-group">
                                    <label for="edadMaxima">Edad Máxima:</label> <input type="number" min="2" max="30" step="1" value="0" name="edadMaxima" id="edadMaxima" />
                            </div>
                         </div>
                    </div>
                    <div class='row'>
                        <div class='col-xs-4 col-sm-4 col-md-4 col-lg-4' style="display: none;">
                            <div class="form-group">
                                <label for="ambito">Ambito:</label>
                                <select name="ambito" id="ambito">        
                                    <option> Elige un ambito... </option>
                                    <?php
                                        $sql="SELECT * FROM ambitos";
                                        $totalAmb=mysqli_query($conexion, $sql)or die("Error en la consulta $sql");
                                        while($linea=mysqli_fetch_array($totalAmb))
                                        {
                                            echo "<option value='$linea[idAmbito]'>$linea[nom_ambito]";
                                        }
                                        
                                    ?>
                                </select>
                                

                            </div>
                        </div>
                        <div class='col-xs-4 col-sm-4 col-md-4 col-lg-4'>
                            <div class="form-group">
                                <label for="comunidadEnti">Comunidad:</label>
                                <select name="comunidadEnti" id="comunidadEnti">        
                                    <option> Elige una comunidad... </option>
                                    <?php
                                        $sql="SELECT * FROM comunidades";
                                        $totalProv=mysqli_query($conexion, $sql)or die("Error en la consulta $sql");
                                        while($linea=mysqli_fetch_array($totalProv))
                                        {
                                            echo "<option value='$linea[idComunidad]'>$linea[nom_comunidad]";
                                        }
                                    ?>
                                    
                                </select>
                            </div>
                        </div>
                        <div class='col-xs-4 col-sm-4 col-md-4 col-lg-4'>
                            <div class="form-group">
                                <label for="provinciaEnti">Provincia:</label>
                                <select name="provinciaEnti" id="provinciaEnti">        
                                    <option> Elige una provincia... </option>
                                </select>
                            </div>
                         </div>
                    </div>
                    <div class='row'>
                        <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
                            <div class="form-group">
                                    <label for="direccion">Dirección:</label> <input type="text" placeholder="Dirección" id="direccion" name="direccion" class="form-control">
                            </div>
                         </div>
                    </div>
                    <div class='row'>
                        <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
                            <div class="form-group">
                                    <label for="descripcion">Descripción:</label> <textarea rows="10" placeholder="Descripción" id="descripcion" name="descripcion" class="form-control"></textarea>
                            </div>
                         </div>
                    </div>
                    <input type="submit" value="Enviar" class="theme-btn btn-style-three">
                    <a href="javascript:history.back()" class="theme-btn btn-style-three">Volver</a>
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
                                    <a href="loginProp.php"><h2>Propón proyectos</h2></a>
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