<?php
require('conexion.php');
$co=$_POST['codigo'];
$no=$_POST['descripcion'];
$di=$_POST['destinatario'];
$po=$_POST['direccion'];
$sql="UPDATE paquete SET descripcion='$no',destinatario='$di',direccion='$po' WHERE idpaquete='$co'";
if(mysql_query($sql))
{
	
	header('Location: modificar_paquete.php');
	
}
else
{
	echo 'Problemas al modificar' .mysql_error();
}
?>