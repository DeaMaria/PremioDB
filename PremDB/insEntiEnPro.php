<?php
session_start();
// Conectamos con la BD
include("conexion.php");

// recuperamos valores
$pro=$_SESSION[proy];
$cif=$_SESSION[user];
// Insertar el registro en la Tabla
$sql="INSERT INTO proyectos_entidades(idProyectoEnt, cif) VALUES ('$pro', '$cif')";

mysqli_query($conexion, $sql) or die ("Error en la consulta $sql");
mysqli_close($conexion);

header("location:listaProy.php");
?>