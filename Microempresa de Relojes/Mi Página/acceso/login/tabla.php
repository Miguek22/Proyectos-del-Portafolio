<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style type="text/css">
centrar {
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
<div class="centrado"><strong class="centrar"> <span class="centrado">Lista de Tipos de Usuarios</span></strong>
</p>
</div>
<p>
<?php
require("conexion.php");
$consulta = "select * from usuario order by usuario asc";
$resultado = $conexion->query($consulta);
if($conexion->errno) die($conexion->error);

?>
<center><a href="formularioguardar.php">Click aqui para agregar nuevo usuario...</a></center><br>

<table width="200" border="1" align="center">
  <tr>
    <td>ID</td>
    <td>USUARIO</td>
    <td>CONTRASEÑA</td>
    <td>FECHA_ALTA</td>
    <td>EDITAR</td>
    <td>ELIMINAR</td>
    </tr>

<?php		
        while($fin = $resultado->fetch_assoc()){ 
		                    echo "<tr>";
                            echo "<td>",$fin['id_usuario'],"</td>";
							echo "<td>",$fin['usuario'],"</td>";
							echo "<td>",$fin['contrasena'],"</td>";
							echo "<td>",$fin['fecha_alta'],"</td>";
							echo "<td><a href='modificar.php?ids=".$fin["id_usuario"]."'>Editar</a></td>";
							
							echo "<td><a href='operacion.php?ids=".$fin["id_usuario"]."'>Eliminar</a></td>";
							echo "</tr>";
 				                              						
		}
?>
</table>
<center>

</center>
</body>
</html>