 <?php 
 require("conexion.php"); 
?>
 <!DOCTYPE html> 
 <html> 
 <head> 
 <title></title> 
 <meta charset="utf-8" />
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
	text-align: center
}

.centrado {
	text-align: center;
	font-size: 36px;
}
</style>
 <body>
 <form action="modificacion.php" method="post">
 <?php 
	 $idGet=$_GET['ids'];
	 $id=$_GET['ids'];
	 $consulta="SELECT * FROM usuario where id_usuario=$idGet ";
	 $resultado=$conexion->query($consulta);
	$fin = $resultado->fetch_assoc();
	 
 ?> 

	<center>
	<table border="2">
	<tr>
	<td><label for="text"> Usuario</label></td>
	<td><input  value="<?php echo $fin['usuario']  ?>" type="text" name="us" readonly></td>
	
</tr>
<tr>
<td>Ingrese nuevo usuario:</td>
<td><input  required placeholder="Ingrese nuevo usuario" type="text" name="nuevo_usuario"></td>
		</tr>
<tr>
<td>Ingrese nueva contraseña:</td>
<td><input required placeholder="Ingrese nueva contraseña" type="text" name="ncontr"></td>
</tr>
		  		
<tr>
<td colspan="2">
 <center><button> Enviar </button></center>
	 </td>
	 </tr>
	
	 </form></center>
	
	 </body>
</html>