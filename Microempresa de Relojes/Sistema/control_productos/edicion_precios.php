<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Editar Precios</title>
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
 background-color: #cac8c8;
 padding: .5rem;
 margin: .5rem 0;
 border:none;
 border-bottom: solid #cac8c8 .2rem;
 transition: all .5s;
}
.claro{
 background-color: #fff;
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
   <h2>EDITAR<span>PRECIOS</span></h2>
  </div>

<form class="form-reg" action="resultado_edicion_precios.php" method="post">
	<?php 
	 require ('conexion.php');
	 $idGet=$_GET['ids'];
	 $id=$_GET['ids'];
	 $consulta="SELECT * FROM precio_productos where id_precio=$idGet";
	 $resultado=$conexion->query($consulta);
	$fin = $resultado->fetch_assoc();
	 
 ?> 

<td><h3 for="text"> FECHAS</h3></td>
<td><input class="input" value="<?php echo $fin['id_precio']  ?>" type="text" name="id" readonly></td>
<br>
<br>
<td><input class="input" value="<?php echo $fin['precio_unidad']  ?>" type="text" name="precio_unidad" readonly></td>
<br>
<br>
<label>Nuevo Precio por Unidad</label>
<input class="claro" name="nuevo_precio_unidad" required placeholder="Ingrese el Nuevo Precio por Unidad">
<br>
<br>
<td><input class="input" value="<?php echo $fin['precio_total']  ?>" type="text" name="precio_total" readonly></td>
<br>
<br>
<label>Nuevo Precio Total</label>
<input class="claro" name="nuevo_precio_total" required placeholder="Ingrese el Nuevo Precio Total">
<br>
<br>
<input class="btn-submit" type="submit" value="Modificar">
	</form>
	</div>
	

</body>
</html>