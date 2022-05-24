<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
// Recepción de los datos enviados mediante POST desde el JS   

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$apellido_p = (isset($_POST['apellido_p'])) ? $_POST['apellido_p'] : '';
$apellido_m = (isset($_POST['apellido_m'])) ? $_POST['apellido_m'] : '';
$correo = (isset($_POST['correo'])) ? $_POST['correo'] : '';
$direccion = (isset($_POST['direccion'])) ? $_POST['direccion'] : '';
$telefono = (isset($_POST['telefono'])) ? $_POST['telefono'] : '';
$puesto = (isset($_POST['puesto'])) ? $_POST['puesto'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';

switch($opcion){
    case 1: //alta
        $consulta = "INSERT INT empleados (nombre, apellido_p, apellido_m, correo, direccion, telefono, puesto) VALUES('$nombre', '$apellido_p', '$apellido_m','$correo','$direccion','$telefono','$puesto') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT id_empleado, nombre, apellido_p, apellido_m, correo, direccion, telefono, puesto ORDER BY id_empleado DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2: //modificación
        $consulta = "UPDATE empleados SET nombre = '$nombre', apellido_p = '$apellido_p', apellido_m ='$apellido_m', correo = '$correo', direccion = '$direccion', telefono = '$telefono', puesto = '$puesto'  WHERE id_empleado='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT id_empleado, nombre, apellido_p, apellido_m, correo, direccion, telefono, puesto FROM empleados1 WHERE id_empleado='$id' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3://baja
        $consulta = "DELETE FROM dudas WHERE id_duda='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;        
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
