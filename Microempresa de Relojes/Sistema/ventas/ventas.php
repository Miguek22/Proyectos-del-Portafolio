<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="../fonts/icomoon/style.css">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/mediaelementplayer.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="../css/fl-bigmug-line.css">
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
  
    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/style.css">

    <link rel="stylesheet" href="../css/estilos_index.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="../fonts/icomoon/style.css">

    <!-- Latest minified bootstrap css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest minified bootstrap js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">

	body{
	background-image: url(1.jpeg);
	font-family: Arial;
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
	
	text-align: center
}

.centrado {
	text-align: center;

}
</style>
</head>

<body>
	<?php
	require("conexion.php");

	?>
	
	<center>

</p>
</div>
<p>
<?php
require("conexion.php");
$consulta = "select * from ventas";
$resultado = $conexion->query($consulta);
if($conexion->errno) die($conexion->error);

?>

<br>
<br>
<br>
<!-- Button trigger modal -->
<!-- Button to trigger modal -->
<button class="btn btn-success btn-lg" data-toggle="modal" data-target="#modalForm">
    Vender
</button>

<!-- Modal -->
<div class="modal fade" id="modalForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Cancelar</span>
                </button>
               
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form action="nueva_venta.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="inputName">Seleccione el Producto</label>
                        <select class="form-control" name="productoventa" id="productoventa">
										        <option class="form-group" value="A">Seleccione</option>
										        <?php 
										            $sql="SELECT `id`, `nombre` FROM `productos`";
										            $result=mysqli_query($conexion,$sql);
										            while($producto=mysqli_fetch_row($result)):
										        ?>
										        <option value="<?php echo $producto[0]?>"><?php echo $producto[1]?></option>
										        <?php endwhile; ?>
										    </select>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Cantidad</label>
                        <input type="text" class="form-control" name="cantidad_pro" id="cantidad_pro" placeholder="Cantidad"/>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Precio</label>
                        <input type="text" class="form-control" name="precio_pro" id="precio_pro" placeholder="Precio"/>
                    </div>
                    <div class="modal-footer">
				                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				                <button type="submit" class="btn btn-primary submitBtn">Guardar</button>
				            </div>
                </form>
            </div>
          
            
        </div>
    </div>
</div>

<br>
<table width="200" border="1" align="center">
<h2>Ventas</h2>
<br>
<br>
  <tr>
    <td>ID</td>
    <td>Producto</td>
    <td>Cantidad</td>
    <td>Monto Total</td> 
    <td>Fecha de venta</td> 
    <td>Opciones</td> 

    </tr>

<?php		
        while($fin = $resultado->fetch_assoc()){ 
		      echo "<tr>";
              echo "<td>",$fin['id_venta'],"</td>";
                            echo "<td>",$fin['producto'],"</td>";
                            echo "<td>",$fin['cantidad'],"</td>";
                            echo "<td>",$fin['monto'],"</td>";
                            echo "<td>",$fin['fecha_venta'],"</td>";
                            echo "<td><a href='editar_ventas.php?ids=".$fin["id_venta"]."'>Editar</a></td>";
                            #echo "<td>",$fin['fecha_alta'],"</td>";
                            echo "<td><a href='eliminar.php?ids=".$fin["id_venta"]."'>Eliminar</a></td>";
                            echo "</tr>";
 				                              						
		}

?>
</table>
<br>
<br>
<center><a href="../Falcon_I/opciones.php">Volver atras</a></center><br>
	
</body>
</html>