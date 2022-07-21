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

<?php
	
	require 'conexion.php';
	
	$nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $email = $_POST['email'];
  $dni = $_POST['dni'];
  $cuil = $_POST['cuil'];
  $telefono = $_POST['telefono'];
  $sexo = $_POST['sexo'];
	$contrasenia = $_POST['contr'];
	$rcontr = $_POST['rcontr'];

	if($contrasenia==$rcontr){

       $sql="insert into datos_usuario (nombre, apellido, dni, cuil, telefono, sexo) values('$nombre', '$apellido', '$dni', '$cuil', '$telefono', '$sexo')";
//ejecutamos la consulta
       $ejecucion=$conexion->query($sql);

       $ultimo_id = mysqli_insert_id($conexion);

       $sql="insert into usuario (usuario, contrasenia, id_datos_usuario) values('$email', '$contrasenia', '$ultimo_id')";
//ejecutamos la consulta
       $ejecucion=$conexion->query($sql);

    }
	
	?>
<center>
<div class="cont1">
  <div class="form-top">
   <h1  class="is-size-2">Formulario de Ingreso</h1>
  
  <br>
	<form class="form-reg" action="../../index.php" method="post">
		
	</form>
    <br>
    <br>
   </form>
	
	<form action="../../index.php" method="post">
	<input class="btn-registro" type="submit" value="Ingresar">
	</form>
	</div>
	</div>
</center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php include_once "../pie.php";?>
</body>
</html>