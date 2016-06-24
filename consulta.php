<html>
<title>Central Camionera</title>
<head>
	<meta charset="utf-8" />
    <meta name="description"content="Practica de html 5" />
    <title>Curso de HTML5 y CSS3     </title>
    <link rel="stylesheet" href="stylo.css" />    

</head>
<body>
<nav>
<?php
echo '<p>Nombre Chofer&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Matricula camion</p>';
require("conexion.php");
$sql="select * from conducee";
$datos=mysql_query($sql,$conectar);
echo "<table border '4'>";
while($renglon=mysql_fetch_array($datos))
{
 echo "<tr>";
 echo "<td>" . $renglon['nombre'] . "&nbsp; &nbsp; </td>";
 echo "<td>" . $renglon['matricula'] . "</td>";
}
echo "</table>"
?>
</nav>
</body>
</html>