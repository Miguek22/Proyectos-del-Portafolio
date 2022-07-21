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
</style>
<body>
	<center>
 <div class="cont1">
  <div class="form-top">
   <h2>Formulario<span>Edición</span></h2>
  </div>

<form class="form-reg" action="resultado_de_edicion.php" method="post">
	<?php 
	 require ('conexion.php');
	 $idGet=$_GET['ids'];
	 $id=$_GET['ids'];
	 $consulta="SELECT * FROM proveedores where id_proveedor=$idGet ";
	 $resultado=$conexion->query($consulta);
	$fin = $resultado->fetch_assoc();
	 
 ?> 

<td><h3 for="text"> Proveedor</h3></td>
<h4>Datos Antiguos</h4>
<td><input class="input" value="<?php echo $fin['id_proveedor']  ?>" type="text" name="id" readonly></td>
<br>
<br>
<td><input class="input" value="<?php echo $fin['nombre_proveedor']  ?>" type="text" name="nombre_proveedor" readonly></td>
<br>
<br>
<td><input class="input" value="<?php echo $fin['direccion_proveedor']  ?>" type="text" name="direccion_proveedor" readonly></td>
<br>
<br>
<td><input class="input" value="<?php echo $fin['telefono_proveedor']  ?>" type="text" name="telefono_proveedor" readonly></td>
<br>
<br>
<td><input class="input" value="<?php echo $fin['correo_proveedor']  ?>" type="text" name="correo_proveedor" readonly></td>
<br>
<br>
<td><input class="input" value="<?php echo $fin['nombre_contacto']  ?>" type="text" name="nombre_contacto" readonly></td>
<br>
<h4>Nuevos Datos</h4>
<br>
<input class="input" name="nuevo_nombre_proveedor" required placeholder="Ingrese una Nueva Compañia" required="">
<br>
<br>
<input class="input" name="nuevo_direccion_proveedor" required placeholder="Ingrese la Nueva Direccion del Proveedor" required="">
<br>
<br>
<input class="input" name="nuevo_telefono_proveedor" required placeholder="Ingrese el Nuevo Teléfono del Proveedor" required="">
<br>
<br>
<input class="input" name="nuevo_correo_proveedor" required placeholder="Ingrese el Nuevo Correo Electrónico" required="">
<br>
<br>
<input class="input" name="nuevo_nombre_contacto" required placeholder="Ingrese el Nuevo Nombre del Contacto" required="">
<br>
<br>
<input class="btn-submit" type="submit" value="Registrarse">
	</form>
	</div>
	

</body>
</html>