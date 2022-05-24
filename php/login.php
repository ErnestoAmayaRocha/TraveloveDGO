<?php
	include('claseconexion.php');	

	$nombre = $_POST['txtNombre'];
	$apellidop = $_POST['txtApellidoP'];
	$apellidom = $_POST['txtApellidoM'];
	$correo = $_POST['txtcorreo'];
	$password = $_POST['txtpass'];
	$edad = $_POST['txtEdad'];
	$telefono = $_POST['txtTel'];
 	


	$sql = "INSERT INTO usuarios (nombre, apellido_p, apellido_m, correo, contrasenia, edad ,telefono ) VALUES ('$nombre','$apellidop','$apellidom','$correo','$password','$edad','$telefono', 'usuario')"; 

	$resultado =mysqli_query($mysqli, $sql) or die("Hubo un error al Insertar este Usuario. " + $sql);

	header("Location: 1login.html");
	
?>