<?php
require('conexion.php');
$co=$_POST['codigo'];
$sql="DELETE FROM paquete WHERE idpaquete='$co'";
if(mysql_query($sql))
{
	
	header('Location: eliminar_paquete.php');
	
}
else
{
	echo 'Problemas al eliminar' .mysql_error();
}
?>