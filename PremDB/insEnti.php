<?php

// Conectamos con la BD
include("conexion.php");

// recuperamos valores
$cif=$_POST['CIF'];
$nom_enti=$_POST['nom_entidad'];
$respon=$_POST['responsable'];
$telf=$_POST['telefono'];
$idLoc=$_POST['idLocalidad'];
$dom_enti=$_POST['domicilio_entidad'];
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