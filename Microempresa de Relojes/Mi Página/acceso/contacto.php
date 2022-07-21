<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contacto</title>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../css/estilos_contacto.css">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

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

</head>
<body class="bg-light">
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img style="margin-left: 100px" src="../icons/logo_1.png" alt="" width="50" height="24">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
          <a class="nav-link" style="margin-left: 335px" aria-current="page" href="../inicio.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="margin-left: 18px" aria-current="page" href="quienes_somos.php">¿Quiénes somos?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="margin-left: 18px" aria-current="page" href="clientes_y_testimonios.php">Dejanos tu Opinión</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="margin-left: 18px" aria-current="page" href="contacto.php">Contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="margin-left: 18px" aria-current="page" href="../index.php">Cerrar Sesión</a>
        </li>
        <li class="nav-item">
                        <a href="../ver_carrito.php" class="button is-success" style="margin-left: 18px">
                            <strong>Ver carrito <?php
                                                include_once "../funciones.php";
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
<div class="contenedor">
  <img src="../images/fondo_6.png" class="img-fluid" alt="">
  <div class="texto-encima"></div>
  <div class="centrado">
    <h1 class="display-1">Contacto</h1>
    <br>
    <br>
    <p class="lead">
  Nuestra misión es poder lograr que las personas estén más conectadas a la tecnología para mejorar su estilo de vida. 
</p>
  </div>
</div>

<div class="contenedor2"> 

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
              <div class="mapa">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d385.22185317219254!2d-58.17463804299163!3d-26.175850099872523!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjbCsDEwJzMzLjEiUyA1OMKwMTAnMjcuOCJX!5e1!3m2!1ses-419!2sar!4v1634993623503!5m2!1ses-419!2sar" width="300" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        <div>
                          <br>
                          <p class="mb-0 font-weight-bold">Dirección</p>
                          <a href="#">Av. González Lelong 600</a>
                          <p class="mb-4"><a href="#">Formosa cap - Argentina</a></p>
                          <p class="mb-0 font-weight-bold">Teléfono</p>
                          <p class="mb-4"><a href="#">+543704982895</a></p>
                          <p class="mb-0 font-weight-bold">Email</p>
                          <p class="mb-0"><a href="#">techforth@gmail.com</a></p>
                        </div>
                        </div>
                        
                <form class="form-horizontal" action="recibe_contacto.php" method="post">
                    <fieldset>
                        <legend class="text-center header" style="padding-right: 280px;">Contáctenos</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="nombre" name="nombre" type="text" placeholder="Nombre" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="apellido" name="apellido" type="text" placeholder="Apellido" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" placeholder="Correo Electrónico" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="telefono" name="telefono" type="text" placeholder="Teléfono" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Envíenos su mensaje aquí. Nos comunicaremos con usted en un plazo de 2 días hábiles." rows="7"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group" style="padding-right: 280px;">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

</div>

<?php include_once "pie.php";?>

</body>
</html>