<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style type="text/css">
.centrar {
	font-size: 16px;
	text-align: center
}

.centrado {
	text-align: center;
	font-size: 36px;
}
body{
 background-color: #efaa;
}
</style>
</head>

<body>
	<?php
	require("conexion.php");

	?>
	
	<center>
		<div class="centrado"><strong class="centrar"> <span class="centrado">Lista de Empleados</span></strong>
</p>
</div>
<p>
<?php
require("conexion.php");
$consulta = "select * from empleados";
$resultado = $conexion->query($consulta);
if($conexion->errno) die($conexion->error);

?>
<center><a href="">Click aqui para agregar nuevo usuario...</a></center><br>
<table width="200" border="1" align="center">
  <tr>
    <td>ID</td>
    <td>NOMBRE</td>
    <td>APELLIDO</td>
    <td>TELÉFONO</td>
    <td>DIRECCIÓN</td>
    <td>DNI</td>
    <td>FECHA DE INCORPORACIÓN</td>
    </tr>

<?php		
        while($fin = $resultado->fetch_assoc()){ 
		                    echo "<tr>";
                            echo "<td>",$fin['id_empleado'],"</td>";
							echo "<td>",$fin['nombre_empleados'],"</td>";
							echo "<td>",$fin['apellido_empleados'],"</td>";
							echo "<td>",$fin['fecha_alta'],"</td>";
							echo "<td><a href='modificar_registros.php?ids=".$fin["id_empleado"]."'>Editar</a></td>";
							
							echo "<td><a href='operacion.php?ids=".$fin["id_empleado"]."'>Eliminar</a></td>";
							echo "</tr>";
 				                              						
		}

?>
<?php
require("conexion.php");
$consulta = "select * from datos_empleados";
$resultado = $conexion->query($consulta);
if($conexion->errno) die($conexion->error);

?>

<?php		
        while($fin = $resultado->fetch_assoc()){ 
		                    echo "<tr>";
                            echo "<td>",$fin['id_datos'],"</td>";
							echo "<td>",$fin['telefono_empleado'],"</td>";
							echo "<td>",$fin['direccion_empleado'],"</td>";
							echo "<td>",$fin['dni_empleado'],"</td>";
							echo "<td>",$fin['fecha_alta'],"</td>";
							echo "<td><a href='modificar_registros.php?ids=".$fin["id_datos"]."'>Editar</a></td>";
							
							echo "<td><a href='operacion.php?ids=".$fin["id_datos"]."'>Eliminar</a></td>";
							echo "</tr>";
 				                              						
		}

?>
</table>
<center>

	</center>
	
</body>
</html>