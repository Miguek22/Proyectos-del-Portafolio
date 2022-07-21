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
	require 'conexion.php';
	$id_proveedor =$_POST['select1'];
	$nombre =$_POST['nombre'];
	$stock_actual = $_POST['stock_actual'];
	$stock_minim= $_POST['stock_minim'];
	$fecha_adqui = $_POST['fecha_adqui'];
    $fecha_vencimiento = $_POST['fecha_vencimiento'];
	$precio_total = $_POST['precio_tot'];
    $precio_unidad = $_POST['precio_unidad'];
    $fecha_modif_precio = $_POST['fecha_modif_precio'];
     

    $fecha_productos = "INSERT INTO fecha_productos (fecha_adqui, fecha_vencimiento, fecha_modif_precio) VALUES ('$fecha_adqui','$fecha_vencimiento', '$fecha_modif_precio')";

    $resultado_fecha =$conexion->query($fecha_productos);
	$ultimo_id1 = mysqli_insert_id($conexion);

    $precio_productos = "INSERT INTO precio_productos (precio_unidad ,precio_total) VALUES ($precio_total,'$precio_unidad')";
		
	$resultado_precio=$conexion->query($precio_productos);
	$ultimo_id2 = mysqli_insert_id($conexion);

	$productos = "INSERT INTO productos (nombre, stock_actual, stock_minim, id_fecha_pro, id_precio_pro, id_proveedor) VALUES ('$nombre', $stock_actual, $stock_minim, $ultimo_id1, $ultimo_id2, $id_proveedor)";

    $resultado_productos =$conexion->query($productos);
	$ultimo_id = mysqli_insert_id($conexion);

?>

<?php
require("conexion.php");
$consulta = "select * from productos";
$resultado = $conexion->query($consulta);
if($conexion->errno) die($conexion->error);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	

<center><a href="registro_productos.html">Click aqui para agregar nuevo producto...</a></center><br>
<table width="200" border="1" align="center">
<center>
<h2>DATOS DE LOS PRODUCTOS</h2>
</center>
  <tr>
    <td>ID</td>
    <td>NOMBRE</td>
    <td>CANTIDAD ACTUAL</td>
    <td>CANTIDAD MINIMA</td>
    <td>N° PROVEEDOR</td>
    <td>FECHAS DEL PRODUCTO</td>
    <td>PRECIOS DEL PRODUCTO</td>
    <td>EDITAR PRODUCTOS</td>
    <td>ELIMINAR PRODUCTOS</td>
    </tr>

<?php		
        while($fin = $resultado->fetch_assoc()){ 
		                    echo "<tr>";
                            echo "<td>",$fin['id_productos'],"</td>";
							echo "<td>",$fin['nombre'],"</td>";
							echo "<td>",$fin['stock_actual'],"</td>";
							echo "<td>",$fin['stock_minim'],"</td>";
							echo "<td>",$fin['id_proveedor'],"</td>";
							echo "<td><a href='fecha_productos.php?ids=".$fin["id_productos"]."'>FECHAS</a></td>";
							echo "<td><a href='precio_productos.php?ids=".$fin["id_productos"]."'>PRECIOS</a></td>";
							
							#echo "<td>",$fin['fecha_alta'],"</td>";
							echo "<td><a href='edicion.php?ids=".$fin["id_productos"]."'>Editar</a></td>";
							
							echo "<td><a href='eliminar_productos.php?ids=".$fin["id_productos"]."'>Eliminar</a></td>";
							echo "</tr>";
 				                              						
		}

?>
</table>

</body>
</html>