<html>
<head>
   <title>Eliminar Camion</title>
</head>
<style type="text/css"> 
*{ 
    font-size: 14px; 
} 
body{ 
background:url('fondo.jpg'); 
}
</style>
<body>
<form action="eliminar_camion2.php" method="post" class="login">
<table width="250" border="1" align="center">
	<tr>
		<td colspan="2" align="center">ELIMINAR</td>
	</tr>
	<tr>
		<td>Matricula</td>
		<td><input name="matricula" type="text" required="required"/></td>
	</tr>
	<tr>
		<td colspan="2"><input value="Eliminar" name="enviar" type="submit" /><h3><a href="index.php">Principal</a></h3>
		</td>
	</tr>
</table>
</form>
</body>
</html>