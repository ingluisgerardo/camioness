<?php
require('conexion.php');
$co=$_POST['codigo'];
$no=$_POST['nombre'];
$sql="UPDATE provincia SET nombre='$no' WHERE idprovincia='$co'";
if(mysql_query($sql))
{
	
	header('Location: modificar_provincia.php');
	
}
else
{
	echo 'Problemas al modificar' .mysql_error();
}
?>