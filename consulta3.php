<html>
	<title>Central Camionera</title>
	<head>
		<meta charset="utf-8" />
	    <meta name="description"content="Practica de html 5" />
	    <title>Distribuye </title>
	   <style type="text/css">
body{ 
background:url('12.jpg'); 
}
#contenedor {
    margin: 40px auto;
    width: 750px;  /* Ancho del contenedor */
box-sizing: border-box;
-moz-box-sizing: border-box;
}

#contenedor input {
height: 32px;
visibility: hidden;
}

#contenedor label {
float: left;
cursor: pointer;
font-size: 15px;  /* Tamaño del texto de las pestañas */
line-height: 40px;
height: 40px;
padding: 0 20px;
display: block;
color: #888;  /* Color del texto de las pestañas */
text-align: center;
border-radius: 5px 5px 0 0;
background: #eee;  /* Fondo de las pestañas */
margin-right: 5px;
}

#contenedor input:hover + label {
background: #ddd;  /* Fondo de las pestañas al pasar el cursor por encima */
color: #666;  /* Color del texto de las pestañas al pasar el cursor por encima */
}

#contenedor input:checked + label {
background: #FFDA91;  /* Fondo de las pestañas al presionar */
color: #444; /* Color de las pestañas al presionar */
z-index: 6;
line-height: 45px;
height: 45px;
position: relative;
top: -5px;
-webkit-transition: .1s;
-moz-transition: .1s;
-o-transition: .1s;
-ms-transition: .1s;
}

.content {
background: #FFDA91;  /* Fondo del contenido */
position: relative;
width: 100%;
height: 350px;  /* Alto del contenido */
padding: 30px;
z-index: 5;
border-radius: 0 5px 5px 5px;
}
.content a{
background: #FFDA91;  /* Fondo del contenido */
position: relative;
width: 100%;
height: 350px;  /* Alto del contenido */
padding: 30px;
z-index: 5;
border-radius: 0 5px 5px 5px;
}
}


.content div {
position: absolute;
z-index: -100;
opacity: 0;
transition: all linear 0.1s;
}

#contenedor input.tab-selector-1:checked ~ .content .content-1,
#contenedor input.tab-selector-2:checked ~ .content .content-2,
#contenedor input.tab-selector-3:checked ~ .content .content-3,
#contenedor input.tab-selector-4:checked ~ .content .content-4 {
    z-index: 100;
    opacity: 1;
    -webkit-transition: all ease-out 0.2s 0.1s;
-moz-transition: all ease-out 0.2s 0.1s;
-o-transition: all ease-out 0.2s 0.1s;
-ms-transition: all ease-out 0.2s 0.1s;
}
</style>  

	</head>
	<body>
	<div id="contenedor">
	<br>
	<br>
	<br>
	<br>
	<a>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 
		&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Tabla de relacion entre el Camionero y la carga que lleva</a>
	<br>
	<nav>
	<div class="content-1">
         <table border="1" align="center">
			<tfoot>
			   <?php 
				include('conexion.php'); 
					$query = "select * from camionero";     // Esta linea hace la consulta
					$result = mysql_query($query); 

					while ($registro = mysql_fetch_array($result)){ 
					echo "
					<tr> 
						  <td align='center'>".$registro['id']."</td> 
						  <td align='center'>".$registro['nombre']."</td> 
						  <td align='center'>".$registro['direccion']."</td>
						  <td align='center'>".$registro['poblacion']."</td>
					</tr> 
					"; 
					} 
					?>
			</tfoot>
		</table>   
        </div>
        <div class="content-1">
         <table border="1" align="center">
			<tfoot>
			   <?php 
				include('conexion.php'); 
					$query = "select * from paquete";     // Esta linea hace la consulta
					$result = mysql_query($query); 

					while ($registro = mysql_fetch_array($result)){ 
					echo "
					<tr> 
						  <td align='center'>".$registro['idpaquete']."</td> 
						  <td align='center'>".$registro['descripcion']."</td> 
						  <td align='center'>".$registro['destinatario']."</td>
					</tr> 
					"; 
					} 
					?>
			</tfoot>
		</table>   
        </div>
     </nav>
    </div>
     <footer>  
		&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 
		&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
		&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;
		&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;
		&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;<a href="index.php">Principal</a></h3>
     </footer>
	</body>
</html>