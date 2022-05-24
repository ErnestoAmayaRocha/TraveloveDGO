<?php
	include('../conexionbd.php');
	$usu = $_POST['txtusuario'];
	$password = $_POST['txtpass'];
	$passcifrada1 =md5($password);
	
	$sql = mysqli_query($conex, "SELECT * FROM usuarios WHERE usuario = '$usu' AND contrasenia = '$passcifrada1'");

	$result = mysqli_num_rows($sql);
	$row = mysqli_fetch_array($sql);
	if ($row) {		
		//Aquí se revisa un Usuario Normal
    	session_start();
		$_SESSION["usuario"] = $row["nombre"]; 
		$_SESSION["tipo"] = $row["tipo"];  
		
		

		if ($_SESSION["tipo"] == "admin") header("Location:dashboard/index.php");
		else header("Location: indexbueno.php");
		
	} else {
		echo "<script> alert ('contraseña y/o usuario incorrecto');window.history.go(-1);</script>";
		
	}
 	
	$conex->close();	
?>