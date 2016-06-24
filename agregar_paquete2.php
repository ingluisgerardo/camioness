<?php
require('conexion.php');
$co=$_POST['codigo'];
$no=$_POST['descripcion'];
$di=$_POST['destinatario'];
$po=$_POST['direccion'];
$sql="INSERT INTO paquete(idpaquete,descripcion,destinatario,direccion) VALUES ('$co','$no','$di','$po')";
if(mysql_query($sql))
{
	
	header('Location: agregar_paquete.php');
	
}
else
{
	echo 'Problemas al registrar';
}
?>