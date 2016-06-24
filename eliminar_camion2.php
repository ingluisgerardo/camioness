<?php
require('conexion.php');
$co=$_POST['matricula'];
$sql="DELETE FROM camion WHERE matricula='$co'";
if(mysql_query($sql))
{
	
	header('Location: eliminar_camion.php');
	
}
else
{
	echo 'Problemas al eliminar' .mysql_error();
}
?>