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
	
	$eliminar="DELETE FROM `productos` WHERE `id_productos`='$usuel'";
	$resultado=$conexion->query($eliminar);

	$eliminar1="DELETE FROM `fecha_productos` WHERE `id_fecha`='$usuel'";
	$resultado1=$conexion->query($eliminar1);

	$eliminar2="DELETE FROM `precio_productos` WHERE `id_precio`='$usuel'";
	$resultado2=$conexion->query($eliminar2);
		
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
	

<center><a href="registro_productos.php">Click aqui para agregar nuevo usuario...</a></center><br>
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

</body>
</html>