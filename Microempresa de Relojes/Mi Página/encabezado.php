<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Página de Inicio</title>
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
<body class="bg-light">

<?php
include_once "funciones.php";
$productos = obtenerProductos();
?>

<header>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img style="margin-left: 100px" src="icons/logo_1.png" alt="" width="50" height="24">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" style="margin-left: 335px" aria-current="page" href="inicio.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="margin-left: 18px" aria-current="page" href="acceso/quienes_somos.php">¿Quiénes somos?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="margin-left: 18px" aria-current="page" href="acceso/clientes_y_testimonios.php">Dejanos tu Opinión</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="margin-left: 18px" aria-current="page" href="acceso/contacto.php">Contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="margin-left: 18px" aria-current="page" href="index.php">Cerrar Sesión</a>
        </li>
        <li class="nav-item">
                        <a href="ver_carrito.php" class="button is-success" style="margin-left: 18px">
                            <strong>Ver carrito <?php
                                                include_once "funciones.php";
                                                $conteo = count(obtenerIdsDeProductosEnCarrito());
                                                if ($conteo > 0) {
                                                    printf("(%d)", $conteo);
                                                }
                                                ?>&nbsp;<i class="fa fa-shopping-cart"></i></strong>
                        </a>
                </li>
      </ul>
    </div>
  </div>
</nav>
</header>


<section>
<div class="contenedor">
  <img src="images/fondo_6.png" class="img-fluid" alt="">
  <div class="texto-encima"></div>
  <div class="centrado">
    <h1 class="display-1">¡BIENVENIDOS A TECH FORTH!</h1>
    <br>
    <br>
    <br>  
    <br>  
    <p class="lead">
  Nuestra misión es poder lograr que las personas estén más conectadas a la tecnología para mejorar su estilo de vida. 
</p>
  </div>
</div>