<?php
require('conexion.php');
$co=$_POST['matricula'];
$no=$_POST['modelo'];
$di=$_POST['tipo'];
$po=$_POST['potencia'];
$sql="UPDATE camion SET modelo='$no',tipo='$di',potencia='$po' WHERE matricula='$co'";
if(mysql_query($sql))
{
	
	header('Location: modificar_camion.php');
	
}
else
{
	echo 'Problemas al modificar' .mysql_error();
}
?>