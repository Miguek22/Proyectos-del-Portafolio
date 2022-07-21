<?php 
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	$mensaje = $_POST['mensaje'];

	echo $nombre. "ha dicho <br/>".$mensaje;
	if(mail('miguelgomez1133@gmail.com', $email, $mensaje)){
		echo "mail enviado";
	}else{
		echo "uyuyuyuyuy";
	}
 ?>