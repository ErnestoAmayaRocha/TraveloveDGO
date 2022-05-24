
<?php
include('../conexionbd.php');


	$nombre =  $_POST['txtNombre'];
	$apellidop =  $_POST['txtApellidoP'];
	$apellidom =  $_POST['txtApellidoM'];
	$usuario = $_POST['txtusuario'];
	$correo =  $_POST['txtcorreo'];
	$password =  $_POST['txtpass1'];
	$edad =  $_POST['txtEdad'];
	$telefono =  $_POST['txtTel'];
	$passcifrada =md5($password);


 	$consulta = "INSERT INTO usuarios ( id_user, nombre, apellido_p, apellido_m, usuario, correo, contrasenia, telefono, fecha_registro, tipo) VALUES (NULL, '$nombre','$apellidop','$apellidom', '$usuario','$correo','$passcifrada','$telefono',CURRENT_TIMESTAMP ,'usuario')";
	$resultado = mysqli_query($conex, $consulta);
	if ($resultado) {
		echo "<script> alert ('Usuario registrado con exito');window.history.go(-2);</script>";

		 

	} else {
		echo "<script> alert ('No se pudo registrar el usuario');window.history.go(-1);</script>";
	
	}

	


	


?>
