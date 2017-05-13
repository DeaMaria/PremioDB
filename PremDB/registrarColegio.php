<?php
session_start();
// Recuperamos datos del index.php
$usu = $_POST['nomEnti'];
$cla = MD5($_POST['cif']);

// Conectamos con mysql
include("conexion.php");

// Creamos la consulta
$sql = "SELECT * FROM colegios WHERE numIndicativo = '$usu'";
$registros=mysqli_query($conexion,$sql);
$total=mysqli_num_rows($registros);
if ($total == 0)
   echo "Usuario no existe <a href='index.php'> Pulsa aquí para continuar </a>";
else
{
	while($linea=mysqli_fetch_array($registros))
	{
	if ($cla!=$linea['cif'])
		echo "Clave INCORRECTA <a href='index.php'> Pulsa aquí para continuar </a>";
	else
		{
		$sql="UPDATE colegios SET ultimoacceso=now() WHERE numIndicativo = '$usu'";
		mysqli_query($conexion,$sql);
		$_SESSION['user']=$usu;
		header("location:create-project.php");
		}
	}
}

?>
