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
	echo "Usuario NO EXISTE<a href='listaProy.php'>Pulsa aqui para continuar</a>";
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
?>