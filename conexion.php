<?php
$host="localhost";
$usuario="root";
$password="";
$conectar=mysql_connect($host, $usuario, $password); 
mysql_select_db("camiones",$conectar);

?>