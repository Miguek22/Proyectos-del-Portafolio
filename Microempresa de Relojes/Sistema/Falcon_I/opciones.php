<?php
  require_once "conexion.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Opciones</title>
	<link rel="stylesheet" href="../librerias/bootstrap/css/tarjeta.css">
</head>
<style type="text/css">
    html{
    font-size: 20px;
    font-family: sans-serif;
   }
    body{
        background-color: #9ad1ed;
    }
    h2{
    color: #f39b53;
    }
    .form-top h2{
     font-weight: bold;
     position: relative;
     top:200px;
     left:290px;
     color: #f39b53;
     font-size: 50px;
     font-family: Arial, Helvetica, sans-serif;
     
     }
  .boton_1{
    text-decoration: none;
    position: relative;
    top:200px;
    left:290px;
    padding: 10px 50px;
    font-weight: 600;
    font-size: 20px;
    color: #ffffff;
    background-color: #1883ba;
    border-radius: 50px;
    border: 1px solid #0016b0;
  }
  .boton_2{
    text-decoration: none;
    position: relative;
    top:200px;
    left:300px;
    padding: 10px 50px;
    font-weight: 600;
    font-size: 20px;
    color: #ffffff;
    background-color: #1883ba;
    border-radius: 50px;
    border: 1px solid #0016b0;
  }
    .boton_3{
    text-decoration: none;
    position: relative;
    top:250px;
    right:275px;
    padding: 10px 42px;
    font-weight: 600;
    font-size: 20px;
    color: #ffffff;
    background-color: #1883ba;
    border-radius: 50px;
    border: 1px solid #0016b0;
  }
      .boton_4{
    text-decoration: none;
    position: relative;
    top:250px;
    right:265px;
    padding: 10px 70px;
    font-weight: 600;
    font-size: 20px;
    color: #ffffff;
    background-color: #1883ba;
    border-radius: 50px;
    border: 1px solid #0016b0;
  }
    .boton_5{
    text-decoration: none;
    position: relative;
    top:15px;
    right:912px;
    padding: 10px 31px;
    font-weight: 600;
    font-size: 20px;
    color: #ffffff;
    background-color: #1883ba;
    border-radius: 50px;
    border: 1px solid #0016b0;
  }
    .boton_6{
    text-decoration: none;
    position: relative;
    top:15px;
    right:900px;
    padding: 10px 55px;
    font-weight: 600;
    font-size: 20px;
    color: #ffffff;
    background-color: #1883ba;
    border-radius: 50px;
    border: 1px solid #0016b0;
  }
  .boton_7{
    text-decoration: none;
    position: relative;
    top:65px;
    right:1475px;
    padding: 10px 55px;
    font-weight: 600;
    font-size: 20px;
    color: #ffffff;
    background-color: #1883ba;
    border-radius: 50px;
    border: 1px solid #0016b0;
  }
  .boton_8{
    text-decoration: none;
    position: relative;
    top:65px;
    right:1470px;
    padding: 10px 55px;
    font-weight: 600;
    font-size: 20px;
    color: #ffffff;
    background-color: #1883ba;
    border-radius: 50px;
    border: 1px solid #0016b0;
  }
  .container{
    position: relative;
    top:40px;
    left:1000px;
  }
</style>
<body>

  <table class="cartas">
    <tr>
      <td>
        <div class="tarjeta">
          <div class="album">
            <img src="../imagenes/ventas.png" alt="">
            <div class="contenido">
              <a href="../ventas/ventas.php"><label for="">Ventas</label></a>
              <?php
                $sql = "SELECT COUNT(id_venta) FROM ventas";
                $result = mysqli_query($conexion,$sql);
                $ventas = mysqli_num_rows($result);
              ?>
              <p class="letra"><?php echo $ventas;?></p>
            </div>
          </div>
        </div>
      </td>
      <td>
        <div class="tarjeta">
          <div class="album">
            <img src="../imagenes/caja.png" alt="">
            <div class="contenido">
              <a href="../control_productos/index_productos.php"><label for="">Productos</label></a>
              <?php
                $sql = "SELECT COUNT(id) FROM productos";
                $result = mysqli_query($conexion,$sql);
                $productos = mysqli_num_rows($result);
              ?>
              <p class="letra"><?php echo $productos;?></p>
            </div>
          </div>
        </div>
      </td>
      <td>
        <div class="tarjeta">
          <div class="album">
            <img src="../imagenes/agente-de-atencion-al-cliente.png" alt="">
            <div class="contenido">
              <a href=""><label for="">Clientes</label></a>
              <?php
                $sql = "SELECT COUNT(id_cliente) FROM clientes";
                $result = mysqli_query($conexion,$sql);
                $clientes = mysqli_num_rows($result);
              ?>
              <p class="letra"><?php echo $clientes;?></p>
            </div>
          </div>
        </div>
      </td>
      <td>
        <div class="tarjeta">
          <div class="album">
            <img src="../imagenes/empleado.png" alt="">
            <div class="contenido">
              <a href="../empleados/empleados.php"><label for="">Empleados</label></a>
              <?php
                $sql = "SELECT COUNT(id_empleado) FROM empleados";
                $result = mysqli_query($conexion,$sql);
                $empleados = mysqli_num_rows($result);
              ?>
              <p class="letra"><?php echo $empleados;?></p>
            </div>
          </div>
        </div>
      </td>
      <td>
        <div class="tarjeta">
          <div class="album">
            <img src="../imagenes/lista-de-verificacion.png" alt="">
            <div class="contenido">
              <a href="../deudas_clientes/deuda_clientes.php"><label for="">Deudores</label></a>
              <?php
                $sql = "SELECT COUNT(id_deuda_cliente) FROM deuda_clientes";
                $result = mysqli_query($conexion,$sql);
                $deudores = mysqli_num_rows($result);
              ?>
              <p class="letra"><?php echo $deudores;?></p>
            </div>
          </div>
        </div>
      </td>
      <td>
        <div class="tarjeta">
          <div class="album">
            <img src="../imagenes/bienes.png" alt="">
            <div class="contenido">
              <a href="../venta_online/ventas_online.php"><label for="">Ventas online</label></a>
              <?php
                $sql = "SELECT COUNT(id_venta) FROM ventas_online";
                $result = mysqli_query($conexion,$sql);
                $online = mysqli_num_rows($result);
              ?>
              <p class="letra"><?php echo $online;?></p>
            </div>
          </div>
        </div>
      </td>
    </tr>



  </table>
    <div class="form-top">
        <h2>Opciones</h2>
    </div>
    <div>
	   <a class="boton_1" href="operacion_guardar.php">Lista de Usuarios</a>
	   <a class="boton_2" href="../empleados/empleados.php">Lista de Empleados</a>
     <a class="boton_3" href="../control_productos/index_productos.php">Lista de Productos</a>
     <a class="boton_4" href="../ventas/ventas.php">Lista de Ventas</a>
    </div>
    <div class="container">
        <div class="row">
          <div class="col-xs-6">
            <div class="logo wow fadeInUp" data-wow-delay="1s">
              <img src="../logo_1.png" alt="Logo" width="200">
              <a class="boton_5" href="../proveedores/index_proveedores.php">Lista de Proveedores</a>
              <a class="boton_6" href="../deudas_clientes/deuda_clientes.php">Lista de Deudores</a>
              <a class="boton_7" href="../venta_online/ventas_online.php">Ver ventas online</a>
              <a class="boton_8" href="cerrar_sesion.php">Salir</a>
            </div>
          </div>
        </div>

	
</body>
</html>