<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
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
<body>

<?php
require("conexion.php");
$usuel= $_GET['ids'];
$consulta = "select * from fecha_productos where (id_fecha)=$usuel";
$resultado = $conexion->query($consulta);
if($conexion->errno) die($conexion->error);

?>
<table width="200" border="1" align="center">
<center>
<h2>FECHAS DEL PRODUCTO</h2>
</center>
<tr>
    <td>ID</td>
    <td>FECHA DE ADQUISICIÓN</td>
    <td>FECHA DE VENCIMIENTO</td>
    <td>FECHA DE MODIFICACIÓN DEL PRECIO</td>
    <td>EDITAR PRODUCTOS</td>
    <td>ELIMINAR PRODUCTOS</td>
    </tr>

<?php		
        while($fin = $resultado->fetch_assoc()){ 
		                    echo "<tr>";
                            echo "<td>",$fin['id_fecha'],"</td>";
							echo "<td>",$fin['fecha_adqui'],"</td>";
							echo "<td>",$fin['fecha_vencimiento'],"</td>";
							echo "<td>",$fin['fecha_modif_precio'],"</td>";
							#echo "<td>",$fin['fecha_alta'],"</td>";
							echo "<td><a href='edicion_fecha.php?ids=".$fin["id_fecha"]."'>Editar</a></td>";
							
							echo "<td><a href='eliminar_productos.php?ids=".$fin["id_fecha"]."'>Eliminar</a></td>";
							echo "</tr>";
 				                              						
		}

?>
</table>
	<center><a href="index_productos.html">Click aqui para agregar nuevo usuario...</a></center>
</body>
</html>