<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulario de Dirección</title>
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
$total = $_POST['total'];
?>
<?php 
//var_dump($productos_en_carrito);
?>


<center>
<br>
<br>
<div>
<div class="cont1">
  <div class="form-top">
   <h1  class="is-size-2">¿A dónde enviamos tu producto?</h1>
  </div> 
  <br>

<form class="form-reg" action="envio.php" method="post">

    <input type="hidden" value="<?php echo $total; ?>" name="total">
    <input type="hidden" value="<?php echo $precio_por_productos; ?>" name="precio_por_productos">
    <div class="form-group">
                            
                            <div class="col-md-8">
                                <label for="">Nombre y Apellido:</label>
                                <input class="form-control" name="nombre_apellido" type="text" required placeholder="Nombre y Apellido">
                     
                            </div>
                        </div>
    <div class="form-group">
                            
                            <div class="col-md-8">
                                <label for="">Email:</label>
                                <input class="form-control" name="email" type="text" required placeholder="Email">
                  
                            </div>
                        </div>
    <div class="form-group">
                           
                            <div class="col-md-8">
                                <label for="">Número de Documento:</label>
                                <input class="form-control" name="dni" type="text" required placeholder="DNI">
                  
                            </div>
                        </div>
    <div class="form-group">
                            
                            <div class="col-md-8">
                                <label for="">Teléfono:</label>
                                <input class="form-control" name="telefono" type="text" required placeholder="Teléfono">
         
                            </div>
                        </div>
    <div class="form-group">
                            
                            <div class="col-md-8">
                                <label for="">Calle:</label>
                                <input class="form-control" name="calle" type="text" required placeholder="Calle">
                                
                            </div>
                        </div>
    <div class="form-group">
                            
                            <div class="col-md-8">
                                <label for="">Número:</label>
                                <input class="form-control" name="numero" type="text" required placeholder="Número">
  
                            </div>
                        </div>
    <div class="form-group">
                            
                            <div class="col-md-8">
                                <label for="">Departamento:</label>
                                <input class="form-control" name="departamento" type="text" required placeholder="Piso/Dpto.">
      
                            </div>
                        </div>
    <div class="form-group">
                           
                            <div class="col-md-8">
                                <label for="">País:</label>
                                <select class="form-control" name="pais" id="pais">
                                    <option value="Argentina">Argentina</option>
                                </select>
 
                            </div>
                        </div>
    <div class="form-group">
                           
                            <div class="col-md-8">
                                <label for="">Provincia:</label>
                                <select class="form-control" name="provincia" id="provincia">
                                    <option value="Buenos Aires">Buenos Aires</option>
                                    <option value="Buenos Aires Capital">Buenos Aires Capital</option>
                                    <option value="Catamarca">Catamarca</option>
                                    <option value="Chaco">Chaco</option>
                                    <option value="Chubut">Chubut</option>
                                    <option value="Cordoba">Córdoba</option>
                                    <option value="Corrientes">Corrientes</option>
                                    <option value="Entre Rios">Entre Rios</option>
                                    <option value="Formosa">Formosa</option>
                                    <option value="Jujuy">Jujuy</option>
                                    <option value="La Pampa">La Pampa</option>
                                    <option value="La Rioja">La Rioja</option>
                                    <option value="Mendoza">Mendoza</option>
                                    <option value="Misiones">Misiones</option>
                                    <option value="Neuquen">Neuquén</option>
                                    <option value="Rio Negro">Rio Negro</option>
                                    <option value="Salta">Salta</option>
                                    <option value="San Juan">San Juan</option>
                                    <option value="San Luis">San Luis</option>
                                    <option value="Santa Cruz">Santa Cruz</option>
                                    <option value="Santa Fe">Santa Fe</option>
                                    <option value="Santiago del Estero">Santiago del Estero</option>
                                    <option value="Tierra del Fuego">Tierra del Fuego</option>
                                    <option value="Tucuman">Tucumán</option>

                                </select>

                            </div>
                        </div>
    <div class="form-group">
                            
                            <div class="col-md-8">
                                <label for="">Ciudad:</label>
                                <input class="form-control" name="ciudad" type="text" required placeholder="Ciudad">

                            </div>
                        </div>
    <div class="form-group">
                            
                            <div class="col-md-8">
                                <label for="">Código Postal:</label>
                                <input class="form-control" name="codigo_postal" type="text" required placeholder="Código Postal">

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                               
                                <button class="button is-danger">
                                    <a href="../../inicio.php" class="button is-danger">Cancelar</a>
                                </button>
                                <button type="submit" class="button is-success">Continuar</button>
                            </div>
                        </div>
	</form>
	</div>
</div>
<br>
<br>
<?php include_once "../pie.php";?>

</body>
</html>

