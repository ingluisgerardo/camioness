<?php
require('conexion.php');
$co=$_POST['codigo'];
$sql="DELETE FROM camionero WHERE id='$co'";
if(mysql_query($sql))
{
	
	header('Location: eliminar_camionero.php');
	
}
else
{
	echo 'Problemas al eliminar' .mysql_error();
}
?>