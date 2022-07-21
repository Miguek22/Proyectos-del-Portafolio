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
	$id_proveedor=$_POST["id"];
	$nombre_proveedor=$_POST["nombre_proveedor"];
	$direccion_proveedor=$_POST["direccion_proveedor"];
	$telefono_proveedor=$_POST["telefono_proveedor"];
	$correo_proveedor=$_POST["correo_proveedor"];
	$nombre_contacto=$_POST["nombre_contacto"];
	$nuevo_nombre_proveedor=$_POST["nuevo_nombre_proveedor"];
	$nuevo_direccion_proveedor=$_POST["nuevo_direccion_proveedor"];
	$nuevo_telefono_proveedor=$_POST["nuevo_telefono_proveedor"];
	$nuevo_correo_proveedor=$_POST["nuevo_correo_proveedor"];
	$nuevo_nombre_contacto=$_POST["nuevo_nombre_contacto"];
	$consulta="UPDATE `proveedores` SET `nombre_proveedor`='$nuevo_nombre_proveedor', `direccion_proveedor`='$nuevo_direccion_proveedor', `telefono_proveedor`='$nuevo_telefono_proveedor', `correo_proveedor`='$nuevo_correo_proveedor', `nombre_contacto`='$nuevo_nombre_contacto' WHERE `id_proveedor`='$id_proveedor'";
	$resultado=$conexion->query($consulta);
?>

	<center>
		<div class="centrado"><strong class="centrar"> <span class="centrado">Lista de Proveedores</span></strong>
</p>
</div>
<p>

<?php
require("conexion.php");
$consulta = "select * from proveedores";
$resultado1 = $conexion->query($consulta);
if($conexion->errno) die($conexion->error);

?>

<center><a href="registro_proveedores.html">Click aqui para agregar nuevo proveedor...</a></center><br>
<table width="200" border="1" align="center">

<h2>Datos</h2>
  <tr>
    <td>ID</td>
    <td>COMPAÑIA</td>
    <td>DIRECCIÓN</td>
    <td>TELÉFONO</td>
    <td>CORREO ELECTRÓNICO</td>
    <td>PERSONA DE CONTACTO</td>
    </tr>

<?php		
        while($fin = $resultado1->fetch_assoc()){ 
		                    echo "<tr>";
                            echo "<td>",$fin['id_proveedor'],"</td>";
							echo "<td>",$fin['nombre_proveedor'],"</td>";
							echo "<td>",$fin['direccion_proveedor'],"</td>";
							echo "<td>",$fin['telefono_proveedor'],"</td>";
							echo "<td>",$fin['correo_proveedor'],"</td>";
							echo "<td>",$fin['nombre_contacto'],"</td>";
							#echo "<td>",$fin['fecha_alta'],"</td>";
							echo "<td><a href='editar.php?ids=".$fin["id_proveedor"]."'>Editar</a></td>";
							
							echo "<td><a href='eliminar.php?ids=".$fin["id_proveedor"]."'>Eliminar</a></td>";
							echo "</tr>";
 				                              						
		}

?>
</table>

	
</body>
</html>