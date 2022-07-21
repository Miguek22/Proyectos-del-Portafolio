<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Página de Envío</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../js/jquery-3.6.0.min.js"></script>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="../../fonts/icomoon/style.css">

    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/magnific-popup.css">
    <link rel="stylesheet" href="../../css/jquery-ui.css">
    <link rel="stylesheet" href="../../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../../css/mediaelementplayer.css">
    <link rel="stylesheet" href="../../css/animate.css">
    <link rel="stylesheet" href="../../fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="../../css/fl-bigmug-line.css">
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
  
    <link rel="stylesheet" href="../../css/aos.css">

    <link rel="stylesheet" href="../../css/style.css">

    <link rel="stylesheet" href="../../css/estilos_index.css">

</head>
<body>
<?php 
include_once "../../funciones.php";
$productos = obtenerProductos();
$productos_en_carrito = obtenerProductosEnCarrito();
$cantidad_productos_en_carrito = obtenerCantidadProductosEnCarrito();

$fecha = date('Y-m-d');

?>
  
<center>
<br>
<br>

<?php

  require 'conexion.php';

  foreach($productos_en_carrito as $producto_carro){
    foreach ($productos as $producto) {
    foreach ($cantidad_productos_en_carrito as $cantidad_en_carrito) { if($cantidad_en_carrito->id_producto == $producto_carro->id && $cantidad_en_carrito->id_producto == $producto->id){
                            $cantidad_p= $cantidad_en_carrito->cantidad;
                            $total = 0;
                            $precio_por_productos = $producto->precio * $cantidad_en_carrito->cantidad; 
                            
                            $total += $precio_por_productos;
                          }
                        }
    $nombre = $producto_carro->nombre;
    }
    $sql="insert into ventas_online (fecha_venta, producto, cantidad, monto_total) values('$fecha', '$nombre', '$cantidad_p', '$precio_por_productos')";
    //ejecutamos la consulta
      $ejecucion=$conexion->query($sql);
  }

  
    
  $ultimo_id_datos = $_POST['id'];
  $numero_tarjeta = $_POST['numero_tarjeta'];
  $mes_venc = $_POST['mes_venc'];
  $anio_venc = $_POST['anio_venc'];
  $ccv = $_POST['ccv'];

      $sql="insert into datos_pago (numero_tarjeta, mes_vencimiento, anio_vencimiento, ccv, id_datos_personales_envio) values('$numero_tarjeta', '$mes_venc', '$anio_venc', '$ccv', '$ultimo_id_datos')";
    //ejecutamos la consulta
      $ejecucion=$conexion->query($sql);

    ?>
    <?php 
                    $total = 0;
                    
                      foreach ($productos as $producto) {
                        $total += $producto->precio;
                        
                          $costo_envio = $total * 0.10;
                          $costo_final = $costo_envio + $total;
                          $ids=$producto->id;
                          foreach ($cantidad_productos_en_carrito as $cantidad_en_carrito) { 
                            if($cantidad_en_carrito->id_producto == $producto->id){
                              
                                    $cantidad_actual = $producto->cantidad-$cantidad_en_carrito->cantidad;
                                
                                  $sql2="update productos set `cantidad`='$cantidad_actual' where `id`='$ids'";
                                  //ejecutamos la consulta
                                  $ejecucion=$conexion->query($sql2);
                          
                          }
                        
                        
                        }
                    ?>
                    <?php } ?>


<br>
<br>
<table>
<h1  class="is-size-2">¡Muchas Gracias por su Compra!</h1>
</center>

<br>
<center>

<form action="../../eliminar_todo_del_carrito.php" method="post">
                                    
                                    <input type="hidden" name="redireccionar_carrito">
                                    <button class="button is-success">
                                        Volver a la Tienda
                                    </button>

                                </form>

<br>

<img class="" src="../../icons/logo_completo.png" style="padding-right: 100px;" height="100" width="550">
</center>

<?php include_once "../pie.php";?>
</body>
</html>
</body>
</html>