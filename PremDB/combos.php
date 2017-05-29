<?php
include("conexion.php");
$op="";
$valor=$_POST["valor"];
$tabla=$_POST["tabla"];
$campo=$_POST["campo"];

include 'conexion.php';
$sql = "SELECT * FROM $tabla WHERE $campo = $valor";

$registros=mysqli_query($conexion, $sql) or die(mysql_error());
$op=$op."<option value=''>Elige una provincia...</option>";

// Comienzo a imprimir el select
while($linea=mysqli_fetch_array($registros))
	{
		//echo $linea['provincia'];
		$op=$op."<option value='$linea[0]'>$linea[1]</option>";
	}			

echo "$op";
?>
