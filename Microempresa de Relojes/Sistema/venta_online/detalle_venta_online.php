<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
$usuel= $_GET['ids'];
$consulta = "select * from detalle_ventas_online";
$resultado = $conexion->query($consulta);
if($conexion->errno) die($conexion->error);

?>
<table width="200" border="1" align="center">
<h2>Detalles de ventas online</h2>
<tr>
    <td>ID DETALLE</td>
    <td>ID</td>
    <td>Monto total</td>
    <td>ID producto</td>
    <td>ID medio de pago</td>
   </tr>
<?php		
        while($fin = $resultado->fetch_assoc()){ 
		                    echo "<tr>";
		                    echo "<td>",$fin['id_det_venta'],"</td>";
							echo "<td>",$fin['id_venta'],"</td>";
							echo "<td>",$fin['monto_total'],"</td>";
							echo "<td>",$fin['id_productos'],"</td>";
							echo "<td>",$fin['id_medio_pago'],"</td>";
							/* echo "<td><a href='editar_detalle_venta.php?ids=".$fin["id_det_venta"]."'>Editar</a></td>";
							
							echo "<td><a href='eliminar.php?ids=".$fin["id_det_venta"]."'>Eliminar</a></td>"; */
							echo "</tr>";
 				                              						
		}

?>
</table>

<center><a href="ventas_online.php">Volver a ventas</a></center><br>
<center><a href="../Falcon_I/opciones.php">Ir a menu</a></center><br>
    
</body>
</html>