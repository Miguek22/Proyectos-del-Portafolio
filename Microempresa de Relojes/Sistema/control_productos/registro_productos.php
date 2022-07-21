<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<style type="text/css">
  body{
  background-image: url(1.jpeg);
  font-family: Arial;
  font-size: 50px;
  background-attachment: fixed;
    }
}

#main-container{
  margin: 100px auto;
  width: 600px;
}

table{
  background-color: white;
  text-align: left;
  border-collapse: collapse;
  width: 90%;
  box-shadow: 0 0 20px 1px rgba(0,0,0,0.3);
  font-size:20px;
  border-radius: 5px;
}

th, td{
  padding: 20px;
  text-align: center;
}

thead{
  background-color: #246355;
  border-bottom: solid 5px #0F362D;
  color: white;
}

tr:nth-child(even){
  background-color: #ddd;
}

tr:hover td{
  background-color: #369681;
  color: white;
}
  }
.centrar {
  font-size: 16px;
  text-align: center;
}

.centrado {
  text-align: center;
  font-size: 36px;
}
.centro {
  text-align: center;
}
.btn-submit{
 width: 25%;
 border-bottom: none;
 background-color: #31b1e5;
 color: white;
}
.btn-submit:hover{
 background-color: #4c9ed9;

}
.btn-submit{
 background-color: #blue;
 padding: .5rem;
 margin: .5rem 0;
 border:none;
 border-bottom: solid #cac8c8 .2rem;
 transition: all .5s;
}
</style>
<body>
<form action="recibe_productos.php" method="post">
		<p class="centro" >Cargar Datos del Producto</p>
		<p>
         <table width="100" border="1" align="center">
          <tr>
          <td><label >Empresa Proveedora<br></label></td>
          <td><label >Nombre<br></label></td>
          <td><label >stock_actual</label></td>
          <td><label >stock_minim</label></td>
          </tr>
          <tr>
            <td>
              <?php
              require 'conexion.php';
              // Consultar la base de datos
              $consulta_mysql="select * from proveedores";
              $resultado_consulta_mysql=$conexion->query($consulta_mysql);
  
              echo "<select name='select1'>";
              while ($fila = $resultado_consulta_mysql->fetch_assoc()){
                  echo "<option value='".$fila['id_proveedor']."'>".$fila['nombre_proveedor']."</option>";

              }
              echo "</select>";
              ?>
              </td>
          	<td><input type="text" name="nombre"></td>
          	<td><input type="text" name="stock_actual"></td>
          	<td><input type="text" name="stock_minim"><br></td>    
          </tr>
          
</table>
<br>
<br>
         <table width="100" border="1" align="center">
          <tr>
          <td><label >fecha_adquisición</label></td>
          <td><label >fecha_vencimiento</label></td>
          <td><label >precio unidad</label></td>
          <td><label >precio total</label></td>
          <td><label >fecha de modificación de precio</label></td>
          </tr>
          <tr>
            <td><input type="date" name="fecha_adqui"></td>
            <td><input type="date" name="fecha_vencimiento"></td>
            <td><input type="number" name="precio_tot"></td>
            <td><input type="number" name="precio_unidad"></td>
            <td><input type="date" name="fecha_modif_precio"></td>
            
          </tr>
          
</table>
<center>	
 <td><input class="btn-submit" type="submit" value="Registrar Producto"></td>
</center>
</form>

</body>
</html>