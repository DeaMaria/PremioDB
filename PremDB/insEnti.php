<?php

// Conectamos con la BD
include("conexion.php");

// recuperamos valores
$cif=$_POST['cif'];
$nom_enti=$_POST['nomEnti'];
$respon=$_POST['respon'];
$telf=$_POST['telf'];
$idLoc=$_POST['localidad'];
$dom_enti=$_POST['dom_enti'];
$correo=$_POST['correo'];
$web=$_POST['web'];
$estatutos=$_POST['estatutos'];
$resgistros=$_POST['registros'];
$compromiso=$_POST['compromiso'];


// Insertar el registro en la Tabla
$sql="INSERT INTO entidades(CIF, nom_entidad, responsable, telefono, idLocalidad, domicilio_entidad, correo, web, estatutos, resgistros, compromiso) VALUES ('$cif', '$nom_entidad', '$respon', $telf, $idLoc, '$dom_enti', '$correo', '$web', '$estatutos', '$compromiso')";

mysqli_query($conexion, $sql) or die ("Error en la consulta $sql");
mysqli_close($conexion);

header("location:formEnti.php");
?>