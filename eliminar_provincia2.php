<?php
require('conexion.php');
$co=$_POST['codigo'];
$sql="DELETE FROM provincia WHERE idprovincia='$co'";
if(mysql_query($sql))
{
	
	header('Location: eliminar_provincia.php');
	
}
else
{
	echo 'Problemas al eliminar' .mysql_error();
}
?>