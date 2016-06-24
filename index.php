<?php 
session_start();
include_once "conexion.php"; 
?>
<html>
<title>Central Camionera</title>
<head>
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
    <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
    <label for="tab-1" class="tab-label-1">CAMIONERO</label>
    
    <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
    <label for="tab-2" class="tab-label-2">CAMION</label>
    
    <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3" />
    <label for="tab-3" class="tab-label-3">PROVINCIA</label>
    
    <input id="tab-4" type="radio" name="radio-set" class="tab-selector-4" />
    <label for="tab-4" class="tab-label-4">PAQUETE</label>
                            
    <div class="content">
        <div class="content-1">
         <table border="1" align="center">
			<thead>
			   <tr>
				 <td>Codigo</td>
				 <td>Nombre</td>
				 <td>Direccion</td>
				 <td>Poblacion</td>
				 <td>Telefono</td>
				 <td>Salario</td>
				 <td><a href="agregar_camionero.php">Agregar</a></td>
				 <td><a href="modificar_camionero.php">Modificar</a></td>
				 <td><a href="eliminar_camionero.php">Eliminar</a></td>
				 <td><a href="consulta2.php">General consulta</a></td>
			   </tr>
			</thead>
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
						  <td align='center'>".$registro['telefono']."</td>
						  <td align='center'>".$registro['salario']."</td>
					</tr> 
					"; 
					} 
					?>
			</tfoot>
		</table>   
        </div>
        <div class="content-2">
            <table border="1" align="center">
			<thead>
			   <tr>
				 <td>Matricula</td>
				 <td>Modelo</td>
				 <td>Tipo</td>
				 <td>Potencia</td>
				 <td><a href="agregar_camion.php">Agregar</a></td>
				 <td><a href="modificar_camion.php">Modificar</a></td>
				 <td><a href="eliminar_camion.php">Eliminar</a></td>
			   </tr>
			</thead>
			<tfoot>
			   <?php 
				include('conexion.php'); 
					$query = "select * from camion";     // Esta linea hace la consulta
					$result = mysql_query($query); 

					while ($registro = mysql_fetch_array($result)){ 
					echo "
					<tr> 
						  <td align='center'>".$registro['matricula']."</td> 
						  <td align='center'>".$registro['modelo']."</td> 
						  <td align='center'>".$registro['tipo']."</td>
						  <td align='center'>".$registro['potencia']."</td>
					</tr> 
					"; 
					} 
					?>
			</tfoot>
		</table>
        </div>
        <div class="content-3">
           <table border="1" align="center">
			<thead>
			   <tr>
				 <td>Codigo</td>
				 <td>Nombre</td>
				 <td><a href="agregar_provincia.php">Agregar</a></td>
				 <td><a href="modificar_provincia.php">Modificar</a></td>
				 <td><a href="eliminar_provincia.php">Eliminar</a></td>
				 <td><a href="consulta4.php">General consulta</a></td>
			   </tr>
			</thead>
			<tfoot>
			   <?php 
				include('conexion.php'); 
					$query = "select * from provincia";     // Esta linea hace la consulta
					$result = mysql_query($query); 

					while ($registro = mysql_fetch_array($result)){ 
					echo "
					<tr> 
						  <td align='center'>".$registro['idprovincia']."</td> 
						  <td align='center'>".$registro['nombre']."</td> 
					</tr> 
					"; 
					} 
					?>
			</tfoot>
		</table> 
        </div>
        <div class="content-4">
            <table border="1" align="center">
			<thead>
			   <tr>
				 <td>Codigo</td>
				 <td>Descripcion</td>
				 <td>Destinatario</td>
				 <td>Direccion</td>
				 <td><a href="agregar_paquete.php">Agregar</a></td>
				 <td><a href="modificar_paquete.php">Modificar</a></td>
				 <td><a href="eliminar_paquete.php">Eliminar</a></td>
				 <td><a href="consulta3.php">General consulta</a></td>
			   </tr>
			</thead>
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
						  <td align='center'>".$registro['direccion']."</td>
					</tr> 
					"; 
					} 
					?>
			</tfoot>
		</table>
        </div>
    </div>
</div>


</body>
</html>