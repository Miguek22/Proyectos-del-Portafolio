<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<style>
	html{
 font-size: 16px;
 font-family: 'Lato', sans-serif;

}
body{
 background-color: #9ad1ed;
}
.cont1{
 max-width: 450px;
 height: auto;
 background-color: #efefef;
 margin: 5% auto;
 padding-bottom: 1rem;
}
.form-top{
 width: 100%;
 text-align: center;
 padding: 2rem 0 1rem;
 border-top: solid .4rem #f39b53;
 margin-bottom: 1rem;
}
.form-top h2{
font-weight: bold;
color: #cac8c8;
font-size: 18px;

}
h2 span{
 color: #f39b53;
}
.form-reg{
 padding: 0 2rem;
 display: flex;
 flex-direction: column;
 justify-content: center;
}
.btn-form{
 display: flex;
 justify-content: space-around;
 margin-top: 1rem;
}
.input, .btn-submit, .btn-reset{
 background-color: #efefef;
 padding: .5rem;
 margin: .5rem 0;
 border:none;
 border-bottom: solid #cac8c8 .2rem;
 transition: all .5s;
}
.input:focus{
 border-bottom: solid #f39b53 .2rem;
}
.btn-submit, .btn-reset{
 width: 100%;
 border-bottom: none;
 background-color: #31b1e5;
 color: white;
}
.btn-reset{
 background-color: #eda135;
}
.btn-submit:hover{
 background-color: #4c9ed9;

}
.btn-reset:hover{
 background-color: #fa9535;
}
	
.input, .btn-registro, .btn-reset{
 background-color: #efefef;
 padding: .5rem;
 margin: .5rem 0;
 border:none;
 border-bottom: solid #cac8c8 .2rem;
 transition: all .5s;
}
.input:focus{
 border-bottom: solid #f39b53 .2rem;
}
.btn-registro, .btn-reset{
 width: 40%;
 border-bottom: none;
 background-color: #31b1e5;
 color: white;
}
.btn-reset{
 background-color: #eda135;
}
.btn-registro:hover{
 background-color: #4c9ed9;

}
.btn-reset:hover{
 background-color: #fa9535;
}

</style>
<body>

<?php
require 'conexion.php';

$nombre_deudor= $_POST['nombre_deudor'];
$apellido_deudor= $_POST['apellido_deudor'];
$dni_deudor= $_POST['dni_deudor'];
$direccion_deudor= $_POST['direccion_deudor'];
$telefono_deudor= $_POST['telefono_deudor'];
$monto_deuda= $_POST['monto_deuda'];

$sql= "insert into deuda_clientes (nombre_deudor, apellido_deudor, monto_deuda) values ('$nombre_deudor', '$apellido_deudor', '$monto_deuda')";

$resultado=$conexion->query($sql);

$ultimo_id = mysqli_insert_id($conexion);

$sql1= "INSERT INTO datos_deudor (dni_deudor, direccion_deudor, telefono_deudor, id_deuda_cliente) values ('$dni_deudor', '$direccion_deudor', '$telefono_deudor', '$ultimo_id')";

$resultado1=$conexion->query($sql1);

$ultimo_id1 = mysqli_insert_id($conexion);
?>
<center>
<div class="cont1">
  <div class="form-top">	
  	<h2>Deudor Registrado <span>Correctamente</span></h2>
	<form class="form-reg" action="deuda_clientes.php" method="post">
		
	</form>
    <br>
    <br>
   </form>
	
	
</body>
</html>
	<form action="deuda_clientes.php" method="post">
	<input class="btn-registro" type="submit" value="Ingresar">
	</form>
	</div>
	</div>
</center>