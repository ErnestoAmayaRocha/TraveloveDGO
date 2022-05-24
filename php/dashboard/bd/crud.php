<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
// Recepción de los datos enviados mediante POST desde el JS   
$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$apellido_p = (isset($_POST['apellido_p'])) ? $_POST['apellido_p'] : '';
$apellidom = (isset($_POST['apellidom'])) ? $_POST['apellidom'] : '';
$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$correo = (isset($_POST['correo'])) ? $_POST['correo'] : '';
$contra = (isset($_POST['contra'])) ? $_POST['contra'] : '';
$telefono = (isset($_POST['telefono'])) ? $_POST['telefono'] : '';
$tipo = (isset($_POST['tipo'])) ? $_POST['tipo'] : '';
$passcifrada2 =md5($contra);

$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';

switch($opcion){
    case 1: //alta
        $consulta = "INSERT INTO usuarios (nombre, apellido_p, apellido_m, usuario, correo, contrasenia, telefono,  tipo) VALUES ('$nombre','$apellido_p','$apellidom', '$usuario','$correo','$passcifrada2','$telefono','$tipo')";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT nombre, apellido_p, apellido_m, usuario, correo, telefono, tipo FROM usurios  ORDER BY id_user DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2: //modificación
    $consulta = "UPDATE usuarios SET nombre='$nombre', apellido_p='$apellido_p', apellido_m='$apellidom', usuario='$usuario',correo='$correo',telefono='$telefono',tipo='$tipo' WHERE id_user='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT nombre, apellido_p, apellido_m, usuario, correo, telefono, tipo FROM uuarios WHERE id='$id' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3://baja
        $consulta = "DELETE FROM usuarios WHERE id_user='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;        
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
