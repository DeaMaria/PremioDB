<?php
session_start();
// Recuperamos datos del index.php
$usu = $_POST['cif'];
$cla = $_POST['numIdent'];

// Conectamos con mysql
include("conexion.php");

// Creamos la consulta
$sqlEnt="SELECT * FROM entidades WHERE CIF='$usu'";
$registrosEnt=mysqli_query($conexion,$sqlEnt) or die("Error en la consulta $sql");
$totalEnt = mysqli_num_rows($registrosEnt);
if ($totalEnt==0)
{
	echo "Usuario NO EXISTE<a href='loginProp.php'>Pulsa aqui para continuar</a>";
}
else
{
	$linea=mysqli_fetch_array($registrosEnt);
	if($linea['numIndicativo']!=$cla)
	{
		echo "Clave INCORRECTA <a href='loginProp.php'>Pulsa aqui para continuar</a>";
	}
	else
	{
		$_SESSION['user']=$usu;
		header("location:create-project.php");
	}
}
?>
