
<?php
include('conexionbd.php');


	$nombre =  $_POST['nombre'];
	$correo =  $_POST['correo'];
	$mensaje =  $_POST['mensaje'];
	


 	$consulta = "INSERT INTO dudas (nombreyapellidos, correo_electronico, tumensaje,fecha_registro) VALUES ('$nombre','$correo','$mensaje',CURRENT_TIMESTAMP)";
	$resultado = mysqli_query($conex, $consulta);
	if ($resultado) {
		echo "<script> alert ('mensaje enviado con exito');window.history.go(-1);</script>";

		 

	} else {
		echo "<script> alert ('No se pudo enviar el mensaje');window.history.go(-1);</script>";
	
	}

	


	


?>
