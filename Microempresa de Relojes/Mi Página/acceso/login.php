<?php include_once "encabezado_compras.php"; 
include_once "funciones.php";
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
  </div>
  <br>
  <form action="acceso/login/Registro.html" method="post">
  <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Registrarse</button>
                            </div>
                        </div>
  </form>
<br>

<?php include_once "pie.php";?>

</body>
</html>
