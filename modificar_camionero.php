<html>
<head>
   <title>Modificar Camionero</title>
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
<form action="modificar_camionero2.php" method="post" class="login">
<table width="250" border="1" align="center">
	<tr>
		<td colspan="2" align="center">MODIFICAR</td>
	</tr>
	<tr>
		<td>Codigo</td>
		<td><input name="codigo" type="text" required="required"/></td>
	</tr>
	<tr>
		<td>Nombre</td>
		<td><input name="nombre" type="text" /></td>
	</tr>
	<tr>
		<td>Direccion</td>
		<td><input name="direccion" type="text" /></td>
	</tr>
	<tr>
		<td>Poblacion</td>
		<td><input name="poblacion" type="text" /></td>
	</tr>
	<tr>
		<td>Telefono</td>
		<td><input name="telefono" type="text" /></td>
	</tr>
	<tr>
		<td>Salario</td>
		<td><input name="salario" type="text" /></td>
	</tr>
	<tr>
		<td colspan="2"><input value="Registrar" name="enviar" type="submit" /><h3><a href="index.php">Principal</a></h3>
		</td>
	</tr>
</table>
</form>
</body>
</html>