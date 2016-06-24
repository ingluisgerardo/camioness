<html>
<head>
   <title>Agregar Camion</title>
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
<form action="agregar_camion2.php" method="post" class="login">
<table width="250" border="1" align="center">
	<tr>
		<td colspan="2" align="center">AGREGAR</td>
	</tr>
	<tr>
		<td>Matricula</td>
		<td><input name="matricula" type="text" required="required"/></td>
	</tr>
	<tr>
		<td>Modelo</td>
		<td><input name="modelo" type="text" /></td>
	</tr>
	<tr>
		<td>Tipo</td>
		<td><input name="tipo" type="text" /></td>
	</tr>
	<tr>
		<td>Potencia</td>
		<td><input name="potencia" type="text" /></td>
	</tr>
	<tr>
		<td colspan="2"><input value="Registrar" name="enviar" type="submit" /><h3><a href="index.php">Principal</a></h3>
		</td>
	</tr>
</table>
</form>
</body>
</html>