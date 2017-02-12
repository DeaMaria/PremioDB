<?php

// Conectamos con la BD
include("conexion.php");

// recuperamos valores
$nom_proy=$_POST['nomProyecto'];
$fec_ini=$_POST['fecInicio']; 
$fec_fin=$_POST['fecFin']; 
$num_vol=$_POST['numParticipantes'];
$edad_min=$_POST['edadMinima'];
$edad_max=$_POST['edadMaxima']; 
$idProv=$_POST['provincia'];
$idLoc=$_POST['localidad']; 
$dir=$_POST['direccion'];
$desc=$_POST['descripcion'];


// Insertar el registro en la Tabla
$sql="INSERT INTO proyectos(nom_proyecto, fechaInicio, fechaFin, numeroVoluntarios, edadMinima, edadMaxima, idProvincia,direccion, descripcion) VALUES ('$nom_proy', $fec_ini, $fec_fin, $num_vol, $edad_min, $edad_max, $idProvincia, '$dir', '$desc')";

mysqli_query($conexion, $sql) or die ("Error en la consulta $sql");
mysqli_close($conexion);

header("location:formproyecto.php");
?>