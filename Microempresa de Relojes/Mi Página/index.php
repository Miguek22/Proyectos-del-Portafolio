<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Página de Ingreso</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/mediaelementplayer.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/estilos_index.css">

</head>
<body>
  
<?php  
include_once "funciones.php";
$productos = obtenerProductos();
?>
<center>
<br>
<br>

<div style="padding-right: 70px;"> 

<p class="lead"> 
<img class="imagen" src="icons/logo_completo.png" align="right" height="200" width="550">
<br>
<br>
<div style="padding-right: 600px;">
<div class="cont1">
  <div class="form-top">
   <h1  class="is-size-2">Formulario de Ingreso</h1>
  </div> 
  <br>
  <form class="form-reg" action="acceso/login/resultado_de_login.php" method="post">
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="nombre" name="nombre_usuario" type="text" placeholder="Usuario" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="apellido" name="password" type="password" placeholder="Contraseña" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="button is-success">Ingresar</button>
                            </div>
                        </div>
  </form>

  <br>
  <form action="acceso/login/Registro.php" method="post">
  <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Registrarse</button>
                            </div>
                        </div>
  </form>
</center>
</div>
</div>
</p>

</div>

<br>
<br>
<?php include_once "pie.php";?>

</body>
</html>
