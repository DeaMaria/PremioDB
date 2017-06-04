<?php
session_start();
// Recuperamos datos del index.php
$usu = $_POST['cif'];
$cla = $_POST['numIdent'];

// Conectamos con mysql
include("conexion.php");

// Creamos la consulta

$sqlCol="SELECT * FROM colegios WHERE CIF='$usu'";
$registrosCol=mysqli_query($conexion,$sqlCol) or die("Error en la consulta $sql");
$totalCol = mysqli_num_rows($registrosCol);
if ($totalCol==0)
{
	echo "Usuario NO EXISTE<a href='loginProp.php'>Pulsa aqui para continuar</a>";
}
else
{
	$linea=mysqli_fetch_array($registrosCol);
	if($linea['numIndicativo']!=$cla)
	{
		echo "Clave INCORRECTA <a href='loginProp.php'>Pulsa aqui para continuar</a>";
	}
	else
	{
		$_SESSION['user']=$usu;
		header("location:create-project-col.php");
	}
}
?>
