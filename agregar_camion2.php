<?php
require('conexion.php');
$co=$_POST['matricula'];
$no=$_POST['modelo'];
$di=$_POST['tipo'];
$po=$_POST['potencia'];
$sql="INSERT INTO camion(matricula,modelo,tipo,potencia) VALUES ('$co','$no','$di','$po')";
if(mysql_query($sql))
{
	
	header('Location: agregar_camion.php');
	
}
else
{
	echo 'Problemas al registrar';
}
?>