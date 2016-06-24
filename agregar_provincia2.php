<?php
require('conexion.php');
$co=$_POST['codigo'];
$no=$_POST['nombre'];
$sql="INSERT INTO provincia (idprovincia,nombre) VALUES ('$co','$no')";
if(mysql_query($sql))
{
	
	header('Location: agregar_provincia.php');
	
}
else
{
	echo 'Problemas al registrar';
}
?>