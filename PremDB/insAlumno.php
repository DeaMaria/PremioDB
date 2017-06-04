<?php
session_start();
// Conectamos con la BD
include("conexion.php");

// recuperamos valores
$pro=$_SESSION[proy];
$cif=$_SESSION[user];
$dni=$_POST['dni'];
$nom_Al=$_POST['nomAlum'];
$fec_Nac=$_POST['fNac'];

// Insertar el registro en la Tabla
$sql="INSERT INTO proyectos_participantes(idProyecto, cif, dni, nombreAlumno, fechaNac) VALUES ('$pro', '$cif', '$dni', '$nom_Al', '$fec_Nac')";

mysqli_query($conexion, $sql) or die ("Error en la consulta $sql");
mysqli_close($conexion);

header("location:inscribir.php");
?>