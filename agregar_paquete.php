<html>
<head>
   <title>Agregar Paquete</title>
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
<form action="agregar_paquete2.php" method="post" class="login">
<table width="250" border="1" align="center">
	<tr>
		<td colspan="2" align="center">AGREGAR</td>
	</tr>
	<tr>
		<td>Codigo</td>
		<td><input name="codigo" type="text" required="required"/></td>
	</tr>
	<tr>
		<td>Descripcion</td>
		<td><input name="descripcion" type="text" /></td>
	</tr>
	<tr>
		<td>Destinatario</td>
		<td><input name="destinatario" type="text" /></td>
	</tr>
	<tr>
		<td>Direccion</td>
		<td><input name="direccion" type="text" /></td>
	</tr>
	<tr>
		<td colspan="2"><input value="Registrar" name="enviar" type="submit" /><h3><a href="index.php">Principal</a></h3>
		</td>
	</tr>
</table>
</form>
</body>
</html>