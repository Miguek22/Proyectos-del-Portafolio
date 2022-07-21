<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
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
	
	$usuario = $_POST['usuario'];
	$contrasenia = $_POST['contr'];
	$rcontr = $_POST['rcontr'];

	if($contrasenia==$rcontr){
	
       $sql="insert into usuario (usuario, contrasenia) values('$usuario', '$contrasenia')";
//ejecutamos la consulta
       $ejecucion=$conexion->query($sql);

       $ultimo_id = mysqli_insert_id($conexion);

    }
	
	?>
<center>
<div class="cont1">
  <div class="form-top">	
  	<h2>Usuario Registrado <span>Correctamente</span></h2>
	<form class="form-reg" action="Login.html" method="post">
		
	</form>
    <br>
    <br>
   </form>
	
	<form action="../index.html" method="post">
	<input class="btn-registro" type="submit" value="Ingresar">
	</form>
	</div>
	</div>
</center>

</body>
</html>