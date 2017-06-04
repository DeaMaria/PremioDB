<?php

// Conectamos con la BD
include("conexion.php");

// recuperamos valores
$nom_proy=$_POST['nomProyecto'];
$fec_ini=$_POST['fecInicio']; 
$fec_fin=$_POST['fecFin']; 
$num_vol=$_POST['numEntidades'];
$idPro=$_POST['provinciaCol']; 
$dir=$_POST['direccion'];
$desc=$_POST['descripcion'];

// Insertar el registro en la Tabla
$sql="INSERT INTO proyectosparaentidades(nom_proyecto, fechaInicio, fechaFin, numeroEmpresas, idProvincia, direccion, descripcion) VALUES ('$nom_proy', '$fec_ini', '$fec_fin', '$num_vol', '$idPro', '$dir', '$desc')";

mysqli_query($conexion, $sql) or die ("Error en la consulta $sql");
mysqli_close($conexion);

header("location:create-project-col.php");
?>