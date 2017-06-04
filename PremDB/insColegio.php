<?php

// Conectamos con la BD
include("conexion.php");

// recuperamos valores
$cif=$_POST['cif'];
$nom_enti=$_POST['nomEnti'];
$respon=$_POST['respon'];
$telf=$_POST['telf'];
$idProv=$_POST['provinciaCol'];
$dom_enti=$_POST['dom_enti'];
$correo=$_POST['correo'];
$web=$_POST['web'];


// Insertar el registro en la Tabla
$sql="INSERT INTO colegios(CIF, nom_colegio, responsable, telefono, idProvincia, domicilio_entidad, correo, web) VALUES ('$cif', '$nom_enti', '$respon', $telf, '$idProv', '$dom_enti', '$correo', '$web')";

mysqli_query($conexion, $sql) or die ("Error en la consulta $sql");
mysqli_close($conexion);

header("location:listaProy.php");
?>