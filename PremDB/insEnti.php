<?php

// Conectamos con la BD
include("conexion.php");

// recuperamos valores
$cif=$_POST['cif'];
$nom_enti=$_POST['nomEnti'];
$respon=$_POST['respon'];
$telf=$_POST['telf'];
$idProv=$_POST['provinciaEnti'];
$dom_enti=$_POST['dom_enti'];
$correo=$_POST['correo'];
$web=$_POST['web'];

$sqlNumIdent="SELECT * FROM `numerosidentificativos` WHERE usado is false Limit 0,1;";
$registros=mysqli_query($conexion, $sqlNumIdent) or die ("Error en la consulta $sqlNumIdent");
$linea=mysqli_fetch_array($registros);
// Insertar el registro en la Tabla
$sql="INSERT INTO entidades(CIF, nom_entidad, responsable, telefono, idProvincia, domicilio_entidad, correo, web, numIndicativo) VALUES ('$cif', '$nom_enti', '$respon', $telf, '$idProv', '$dom_enti', '$correo', '$web', ".$linea['numIdentificativo'].");";
$sqlUpdate="UPDATE numerosidentificativos SET usado=1 WHERE usado is false LIMIT 1;";
mysqli_query($conexion, $sql) or die ("Error en la consulta $sql");
mysqli_query($conexion, $sqlUpdate) or die ("Error en la consulta $sqlUpdate");
//mysqli_query($conexion, $sql) or die("Error en consulta");
mysqli_close($conexion);

header("location:listaProy.php");
?>