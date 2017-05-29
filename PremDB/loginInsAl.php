<?php
session_start();
// Recuperar informacion del formulario
$usu = $_POST['cif'];
$cla = $_POST['numIdent'];

include("conexion.php");

//consulta sql
$sql="SELECT c.* FROM colegios as c WHERE c.CIF='$usu'";
$registros=mysql_query($sql);
$total = mysqli_num_rows($registros);
if ($total==0)
{
	echo "Usuario NO EXISTE<a href='index.php'>Pulsa aqui para continuar</a>";
}
else
{
	$linea=mysqli_fetch_array($registros);
	if($linea['numIdent']!=$cla)
	{
		echo "Clave INCORRECTA <a href='index.php'>Pulsa aqui para continuar</a>";
	}
	else
	{
		$_SESSION['id'] =$usu;
		header("location:inscribir.php");
	}
}