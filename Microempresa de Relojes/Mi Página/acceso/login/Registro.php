<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Página de Ingreso</title>
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
?>
<center>
<br>
<br>
<div class="cont1">
  <div class="form-top">
   <h1  class="is-size-2">Formulario de Ingreso</h1>
  </div> 
  <br>

<form class="form-reg" action="resultado_de_registro.php" method="post">
    <div class="form-group">
                            
                            <div class="col-md-8">
                                <label for="">Nombres:</label>
                                <input class="form-control" name="nombre" type="text" required placeholder="Nombres">
                                <br>
                                <br>
                            </div>
                        </div>
    <div class="form-group">
                            
                            <div class="col-md-8">
                                <label for="">Apellidos:</label>
                                <input class="form-control" name="apellido" type="text" required placeholder="Apellidos">
                                <br>
                                <br>
                            </div>
                        </div>
    <div class="form-group">
                            
                            <div class="col-md-8">
                                <label for="">Email:</label>
                                <input class="form-control" name="email" type="text" required placeholder="Email">
                                <br>
                                <br>
                            </div>
                        </div>
    <div class="form-group">
                           
                            <div class="col-md-8">
                                <label for="">Número de Documento:</label>
                                <input class="form-control" name="dni" type="text" required placeholder="DNI">
                                <br>
                                <br>
                            </div>
                        </div>
    <div class="form-group">
                            
                            <div class="col-md-8">
                                <label for="">CUIL:</label>
                                <input class="form-control" name="cuil" type="text" required placeholder="CUIL">
                                <br>
                                <br>
                            </div>
                        </div>
    <div class="form-group">
                            
                            <div class="col-md-8">
                                <label for="">Teléfono:</label>
                                <input class="form-control" name="telefono" type="text" required placeholder="Teléfono">
                                <br>
                                <br>
                            </div>
                        </div>
    <div class="form-group">
                           
                            <div class="col-md-8">
                                <label for="">Género:</label>
                                <select class="form-control" name="sexo" id="sexo">
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                </select>
                                <br>
                                <br>
                            </div>
                        </div>
    <div class="form-group">
                            
                            <div class="col-md-8">
                                <label for="">Contraseña:</label>
                                <input class="form-control" name="contr" type="password" required placeholder="Contraseña">
                                <br>
                                <br>
                            </div>
                        </div>
    <div class="form-group">
                            
                            <div class="col-md-8">
                                <label for="">Reingresar contraseña:</label>
                                <input class="form-control" name="rcontr" type="password" required placeholder="Vuelva a ingresar su contraseña">
                                <br>
                                <br>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="button is-success">Registrarse</button>
                            </div>
                        </div>
	</form>
	</div>

<br>
<br>
<?php include_once "../pie.php";?>

</body>
</html>

