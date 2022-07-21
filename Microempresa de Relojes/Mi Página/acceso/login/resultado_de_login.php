<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<form>
<body>
	<?php 

	require 'conexion.php';

	if (!isset($_SESSION)) {
		session_start();
	}

		$usuario = $_POST['nombre_usuario'];
		$contrasenia = $_POST['password'];


		$sql = "SELECT * FROM `usuario` WHERE usuario = '$usuario' and contrasenia = '$contrasenia'";

		$result = $conexion->query($sql);



		if ($fila = mysqli_fetch_array($result)){

			$_SESSION['usuario'] = $fila['usuario'];
			
			header("Location:../../inicio.php");
			?>
			<a href="inicio.php"></a>

		<?php  
		}else{
			echo 
			'<script>
				 window.alert("su usuario o contraseña no son correctas . Vuelva a intentarlo");
				 self.location = "../../index.php";
			 </script>';
			
		}
	 ?>
	</body>
	</form>