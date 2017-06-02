<?php
session_start();
// Recuperar informacion del formulario
$usu = $_POST['cif'];
$cla = $_POST['numIdent'];
$idProy=$_GET['id'];

include("conexion.php");

//consulta sql
$sqlCol="SELECT * FROM colegios WHERE CIF='$usu'";
$registrosCol=mysqli_query($conexion,$sqlCol) or die("Error en la consulta $sql");
$totalCol = mysqli_num_rows($registrosCol);
if ($totalCol==0)
{
	echo "Usuario NO EXISTE<a href='index.php'>Pulsa aqui para continuar</a>";
}
else
{
	$linea=mysqli_fetch_array($registrosCol);
	if($linea['numIndicativo']!=$cla)
	{
		echo "Clave INCORRECTA <a href='index.php'>Pulsa aqui para continuar</a>";
	}
	else
	{
		$_SESSION['user']=$usu;
		$_SESSION['proy']=$idProy;
		header("location:inscribir.php");
	}
}
$sqlEnt="SELECT * FROM entidades WHERE CIF='$usu'";
$registrosEnt=mysqli_query($conexion,$sqlEnt) or die("Error en la consulta $sql");
$totalEnt = mysqli_num_rows($registrosEnt);
if ($totalEnt==0)
{
	echo "Usuario NO EXISTE<a href='index.php'>Pulsa aqui para continuar</a>";
}
else
{
	$linea=mysqli_fetch_array($registrosEnt);
	if($linea['numIndicativo']!=$cla)
	{
		echo "Clave INCORRECTA <a href='index.php'>Pulsa aqui para continuar</a>";
	}
	else
	{
		$_SESSION['user']=$usu;
		$_SESSION['proy']=$idProy;
		header("location:inscribirEnt.php");
	}
}