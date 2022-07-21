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
		<div class="centrado"><strong class="centrar"> <span class="centrado">Lista de Ventas</span></strong>
</p>
</div>
<p>
<?php
require("conexion.php");
$consulta = "select * from ventas_online";
$resultado = $conexion->query($consulta);
if($conexion->errno) die($conexion->error);

?>
<table width="200" border="1" align="center">
<h2>Ventas online</h2>
  <tr>
    <td>ID</td>
    <td>Fecha de venta</td>
    <td>Productos</td>
    <td>Cantidad</td>
    <td>Monto Total</td>
	  <td>Detalle</td>
    </tr>

<?php		
        while($fin = $resultado->fetch_assoc()){ 
		      echo "<tr>";
              echo "<td>",$fin['id_venta'],"</td>";
							echo "<td>",$fin['fecha_venta'],"</td>";
							echo "<td>",$fin['producto'],"</td>";
							echo "<td>",$fin['cantidad'],"</td>";
							echo "<td>",$fin['monto_total'],"</td>";
							echo "<td><a href='detalle_venta_online.php?ids=".$fin["id_venta"]."'>Ver</a></td>";
							#echo "<td>",$fin['fecha_alta'],"</td>";
							/* echo "<td><a href='editar.php?ids=".$fin["id_venta"]."'>Editar</a></td>";
							
							echo "<td><a href='eliminar.php?ids=".$fin["id_venta"]."'>Eliminar</a></td>"; */
							echo "</tr>";
 				                              						
		}

?>
</table>

<center><a href="../Falcon_I/opciones.php">Volver atras</a></center><br>

	
</body>
</html>