<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style type="text/css">
	body{
	background-image: url(1.jpeg);
	font-family: Arial;
	font-size: 50px;
	background-attachment: fixed;
		}
}

#main-container{
	margin: 100px auto;
	width: 600px;
}

table{
	background-color: white;
	text-align: left;
	border-collapse: collapse;
	width: 90%;
	box-shadow: 0 0 20px 1px rgba(0,0,0,0.3);
	font-size:20px;
	border-radius: 5px;
}

th, td{
	padding: 20px;
}

thead{
	background-color: #246355;
	border-bottom: solid 5px #0F362D;
	color: white;
}

tr:nth-child(even){
	background-color: #ddd;
}

tr:hover td{
	background-color: #369681;
	color: white;
}
	}
.centrar {
	font-size: 16px;
	text-align: center
}

.centrado {
	text-align: center;
	font-size: 36px;
}
</style>
</head>

<body>
	<?php
	require("conexion.php");

	?>
	
	<center>
		<div class="centrado"><strong class="centrar"> <span class="centrado">Lista de Deudores</span></strong>
</p>
</div>
<p>
<?php
require("conexion.php");
$consulta = "select * from deuda_clientes";
$resultado = $conexion->query($consulta);
if($conexion->errno) die($conexion->error);

?>
<center><a href="registro_deudores.html">Click aqui para agregar un nuevo deudor...</a></center><br>
<table width="200" border="1" align="center">
<h2>Datos</h2>
  <tr>
    <td>ID</td>
    <td>NOMBRE</td>
    <td>APELLIDO</td>
    <td>MONTO DE LA DEUDA</td>
    </tr>

<?php		
        while($fin = $resultado->fetch_assoc()){ 
		                    echo "<tr>";
                            echo "<td>",$fin['id_deuda_cliente'],"</td>";
							echo "<td>",$fin['nombre_deudor'],"</td>";
							echo "<td>",$fin['apellido_deudor'],"</td>";
							echo "<td>",$fin['monto_deuda'],"</td>";
							#echo "<td>",$fin['fecha_alta'],"</td>";
							echo "<td><a href='editar.php?ids=".$fin["id_deuda_cliente"]."'>Editar</a></td>";
							
							echo "<td><a href='eliminar.php?ids=".$fin["id_deuda_cliente"]."'>Eliminar</a></td>";
							echo "</tr>";
 				                              						
		}

?>
</table>
<br>
<br>
<br>
<?php
require("conexion.php");
$consulta = "select * from datos_deudor";
$resultado = $conexion->query($consulta);
if($conexion->errno) die($conexion->error);

?>
<table width="200" border="1" align="center">
<h2>Datos Específicos del Deudor</h2>
<tr>
    <td>ID</td>
    <td>DNI</td>
    <td>DIRECCIÓN</td>
    <td>TELÉFONO</td>
   </tr>
<?php		
        while($fin = $resultado->fetch_assoc()){ 
		                    echo "<tr>";
		                    echo "<td>",$fin['id_datos_deudor'],"</td>";
							echo "<td>",$fin['dni_deudor'],"</td>";
							echo "<td>",$fin['direccion_deudor'],"</td>";
							echo "<td>",$fin['telefono_deudor'],"</td>";
							echo "<td><a href='editar_datos_deudor.php?ids=".$fin["id_datos_deudor"]."'>Editar</a></td>";
							
							echo "<td><a href='eliminar.php?ids=".$fin["id_datos_deudor"]."'>Eliminar</a></td>";
							echo "</tr>";
 				                              						
		}

?>
</table>

	
</body>
</html>