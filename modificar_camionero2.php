<?php
require('conexion.php');
$co=$_POST['codigo'];
$no=$_POST['nombre'];
$di=$_POST['direccion'];
$po=$_POST['poblacion'];
$te=$_POST['telefono'];
$sa=$_POST['salario'];
$sql="UPDATE camionero SET nombre='$no',direccion='$di',poblacion='$po',telefono='$te',salario='$sa' WHERE id='$co'";
if(mysql_query($sql))
{
	
	header('Location: modificar_camionero.php');
	
}
else
{
	echo 'Problemas al modificar' .mysql_error();
}
?>