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
$precio_por_productos = $_POST['precio_por_productos'];
$total_recibido = $_POST['total'];

?>
  
<center>
<br>
<br>

<?php
	
  require 'conexion.php';
	
  $nombre_apellido = $_POST['nombre_apellido'];
  $email = $_POST['email'];
  $dni = $_POST['dni'];
  $telefono = $_POST['telefono'];
  $calle = $_POST['calle'];
  $numero = $_POST['numero'];
  $departamento = $_POST['departamento'];
  $pais = $_POST['pais'];
  $provincia = $_POST['provincia'];
  $ciudad = $_POST['ciudad'];
  $codigo_postal = $_POST['codigo_postal'];

	  $sql="insert into datos_personales_envio (nombre_apellido, email, dni, telefono) values('$nombre_apellido', '$email', $dni, $telefono)";
	//ejecutamos la consulta
	       $ejecucion=$conexion->query($sql);

	       $ultimo_id = mysqli_insert_id($conexion);

       $sql2="insert into datos_envio (calle, numero, departamento, pais, provincia, ciudad, codigo_postal, id_datos_personales_envio) values('$calle', '$numero', '$departamento', '$pais', '$provincia', '$ciudad', '$codigo_postal', '$ultimo_id')";
//ejecutamos la consulta
       $ejecucion=$conexion->query($sql2);
	?>
<center>
<div class="cont1">
  <div class="form-top">
   <h1  class="is-size-2">Finalizá tu compra</h1>
<?php 

                    
                    foreach ($productos_en_carrito as $producto) {
                          
                          $costo_envio = 100;
                          $costo_final = $costo_envio + $total_recibido;
                        }
                    ?>
  

  <p class="card-header-title is-size-4">¿Cómo te lo enviamos?</p>
              <div class="row mb-5">
                <div class="col-md-6 col-lg-6 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text"></span>
                  <div><p>3 a 5 días hábiles. Los tiempos de entrega podrían ser mayores debido a la situación actual de cuarentena.</p></div>
                </div>
                <div class="col-md-6 col-lg-2 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Monto</span>
                  <div>$<?php echo number_format($total_recibido, 2) ?></div>
                </div>
                <div class="col-md-6 col-lg-2 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Costo de envío</span>
                  <div>$<?php echo number_format($costo_envio, 2) ?></div>
                </div>
                <div class="col-md-6 col-lg-2 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Monto Final</span>
                  <div>$<?php echo number_format($costo_final, 2) ?></div>
                </div>
              </div>
  
	</div>
	</div>

  <div class="cont1">
  <div class="form-top">
   <h1  class="is-size-2">¿Cómo querés pagar?</h1>
  </div> 
  <br>


<label for="">Si desea pagar con Mercado Pago, haga clic en el botón, le dejamos nuestro numero de teléfono</label>
<label><b>+543704519317</b></label>

<br>
<a onclick="mensaje()" target="_blank"><img src="../../icons/MP.png" alt="" height="80" width="200"></a>

<script>    
function mensaje(){
  var bool=confirm("Lo estamos redireccionando a la página oficial de Mercado libre, por favor, confirme su acción");
  if(bool){
    window.open('https://www.mercadopago.com.ar/', '_blank'); 
  }else{
    alert("Se canceló la solicitud");
  }
};
</script>
<br>
<label for="">De lo contrario, rellene el siguiente formulario</label>
<br>
<br>
<br>

<form class="form-reg" action="pago_realizado.php" method="post">
   <input type="hidden" value="<?php echo $precio_por_productos; ?>" name="precio_por_productos">
    <div class="form-group">
      <input class="form-control" name="id" value="<?php echo $ultimo_id; ?>" type="hidden">
                            
                            <div class="col-md-8">
                                <label for="">Número de Tarjeta:</label>
                                <input class="form-control" name="numero_tarjeta" type="text" required placeholder="ej.4535-9999-9999-9999">
                     
                            </div>
                        </div>
    <div class="form-group">
                            
                            <div class="col-md-8">
                                <label for="">Mes Vencimiento:</label>
                                <input class="form-control" name="mes_venc" type="text" required placeholder="MM">
                  
                            </div>
                        </div>
    <div class="form-group">
                           
                            <div class="col-md-8">
                                <label for="">Año Vencimiento:</label>
                                <input class="form-control" name="anio_venc" type="text" required placeholder="AA">
                  
                            </div>
                        </div>
    <div class="form-group">
                            
                            <div class="col-md-8">
                                <label for="">CCV:</label>
                                <input class="form-control" name="ccv" type="text" required placeholder="">
         
                            </div>
                        </div>
                        <br>
    <div class="form-group">

                            <div class="col-md-12 text-center">
                              <a href="../../inicio.php" class="button is-danger">Cancelar</a>
                                <button type="submit" class="button is-success">Continuar</button>

                            </div>
                        </div>
  </form>
  </div>
</div>


</center>
<br>
<br>

<?php include_once "../pie.php";?>
</body>
</html>
</body>
</html>