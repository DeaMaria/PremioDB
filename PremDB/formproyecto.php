<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Buzón de Comunicaciones</title>

   
    <link href="./dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="./assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <link href="jumbotron-narrow.css" rel="stylesheet">

    <script src="./assets/js/ie-emulation-modes-warning.js"></script>


    <script src="./assets/js/jquery-1.7.2.js"></script>
	<script language="javascript">
	
	</script>

  </head>

  <body>
  <?php
      include("conexion.php");
  ?>  

 <div class="container">
      <div class="header clearfix">
	    <img src="" height="65">
<!--  	   <form class="navbar-form navbar-right" action="vernoticiaspublicas.php" method="post">
 -->		
		<form method="post" action="insproyecto.php">			
		<div class='row'>
			<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
				<div class="form-group">
					    <label for="nomProyecto">Nombre del proyecto:</label> <input type="text" placeholder="Nombre del proyecto" id="nomProyecto" name="nomProyecto" class="form-control">
				</div>
			</div>
		</div>
		<div class='row'>
			<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
				<div class="form-group">
					    <label for="fecInicio">Fecha de inicio:</label> <input type="date" id="fecInicio" name="fecInicio" placeholder="YYYY-MM-DD" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}"/>
				</div>
			 </div>
		</div>
		<div class='row'>
			<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
				<div class="form-group">
					    <label for="fecFin">Fecha de fin:</label> <input type="date" id="fecFin" name="fecFin" placeholder="YYYY-MM-DD" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}"/>
				</div>
			 </div>
		</div>

		<div class='row'>
			<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
				<div class="form-group">
					    <label for="numParticipantes">Número de Participantes:</label><input type="number" min="2" step="1" value="0" name="numParticipantes" id="numParticipantes" />
				</div>
			 </div>
		</div>
		<div class='row'>
			<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
				<div class="form-group">
					    <label for="edadMinima">Edad Mínima:</label> <input type="number" min="2" max="30" step="1" value="0" name="edadMinima" id="edadMinima" />
				</div>
			 </div>
		</div>
		<div class='row'>
			<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
				<div class="form-group">
					    <label for="edadMaxima">Edad Máxima:</label> <input type="number" min="2" max="30" step="1" value="0" name="edadMaxima" id="edadMaxima" />
				</div>
			 </div>
		</div>
		<div class='row'>
			<div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>
				<div class="form-group">
					<label for="provincia">Provincia:</label><textarea rows="1" id="provincia" name="provincia" class="form-control">Cambiar a select-provincia</textarea>
				</div>
			</div>
			<div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>
				<div class="form-group">
					    <label for="nomlocalidad">Localidad:</label>
					    <select name="nomlocalidad" id="nomlocalidad">
					    	<option>Elige localidad</option>
					    		<?php
					    			$sql="SELECT * FROM provincias";
					    			$totalLoc=mysqli_query($conexion, $sql) or die("Error en la consulta $sql");
					    			while ($linea=mysqli_fetch_array($totalLoc)){
					    				echo "<option value='$linea[idProvincia]'>$linea[nom_provincia]";
					    			}
					    		?>
					    </select>
				</div>
			 </div>
		</div>
		<div class='row'>
			<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
				<div class="form-group">
					    <label for="direccion">Dirección:</label> <textarea rows="2" id="direccion" name="direccion" class="form-control"></textarea>
				</div>
			 </div>
		</div>
		<div class='row'>
			<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
				<div class="form-group">
					    <label for="descripcion">Descripción:</label> <textarea rows="10" id="descripcion" name="descripcion" class="form-control"></textarea>
				</div>
			 </div>
		</div>

            <button type="submit" class="btn btn-md btn-primary">Enviar</button>
            <button type="button" class="btn btn-md btn-primary" onclick="window.open('index.php','_parent')">Volver</button>
        </form>

	  </div><!-- header clearfix -->
		<footer class='footer'>
        
        </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>