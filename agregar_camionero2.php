<?php
require('conexion.php');
$co=$_POST['codigo'];
$no=$_POST['nombre'];
$di=$_POST['direccion'];
$po=$_POST['poblacion'];
$te=$_POST['telefono'];
$sa=$_POST['salario'];
$sql="INSERT INTO camionero (id,nombre,direccion,poblacion,telefono,salario) VALUES ('$co','$no','$di','$po','$te','$sa')";
if(mysql_query($sql))
{
	
	header('Location: agregar_camionero.php');
	
}
else
{
	echo 'Problemas al registrar';
}
?>