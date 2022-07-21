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
	require 'conexion.php';
	$id_empleado=$_POST["id"];
	$nombre_empleado=$_POST["nombre"];
	$apellido_empleado=$_POST["apellido"];
	$nuevo_nombre_empleado=$_POST["nuevo_nombre_empleado"];
	$nuevo_apellido_empleado=$_POST["nuevo_apellido_empleado"];
	$consulta="UPDATE `empleados` SET `nombre_empleados`='$nuevo_nombre_empleado', `apellido_empleados`='$nuevo_apellido_empleado' WHERE `id_empleado`='$id_empleado'";
	$resultado=$conexion->query($consulta);
?>

	<center>
		<div class="centrado"><strong class="centrar"> <span class="centrado">Lista de Empleados</span></strong>
</p>
</div>
<p>

<?php
require("conexion.php");
$consulta = "select * from empleados";
$resultado1 = $conexion->query($consulta);
if($conexion->errno) die($conexion->error);

?>

<center><a href="registro_empleados.html">Click aqui para agregar nuevo usuario...</a></center><br>
<table width="200" border="1" align="center">

<h2>Datos</h2>
  <tr>
    <td>ID</td>
    <td>NOMBRE</td>
    <td>APELLIDO</td>
    </tr>

<?php		
        while($fin = $resultado1->fetch_assoc()){ 
		                    echo "<tr>";
                            echo "<td>",$fin['id_empleado'],"</td>";
							echo "<td>",$fin['nombre_empleados'],"</td>";
							echo "<td>",$fin['apellido_empleados'],"</td>";
							#echo "<td>",$fin['fecha_alta'],"</td>";
							echo "<td><a href='editar.php?ids=".$fin["id_empleado"]."'>Editar</a></td>";
							
							echo "<td><a href='eliminar.php?ids=".$fin["id_empleado"]."'>Eliminar</a></td>";
							echo "</tr>";
 				                              						
		}

?>
</table>
<br>
<br>
<br>
<?php
require("conexion.php");
$consulta = "select * from datos_empleados";
$resultado = $conexion->query($consulta);
if($conexion->errno) die($conexion->error);

?>
<table width="200" border="1" align="center">
<h2>Datos Específicos del Empleado</h2>
<tr>
    <td>ID</td>
    <td>TELÉFONO</td>
    <td>DIRECCIÓN</td>
    <td>DNI</td>
    <td>FECHA DE INCORPORACIÓN</td>
   </tr>
<?php		
        while($fin = $resultado->fetch_assoc()){ 
		                    echo "<tr>";
		                    echo "<td>",$fin['id_datos'],"</td>";
							echo "<td>",$fin['telefono_empleado'],"</td>";
							echo "<td>",$fin['direccion_empleado'],"</td>";
							echo "<td>",$fin['dni_empleado'],"</td>";
							echo "<td>",$fin['fecha_alta'],"</td>";
							echo "<td><a href='editar_datos_empleados.php?ids=".$fin["id_datos"]."'>Editar</a></td>";
							
							echo "<td><a href='eliminar.php?ids=".$fin["id_datos"]."'>Eliminar</a></td>";
							echo "</tr>";
 				                              						
		}

?>
</table>

	
</body>
</html>