<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
// Recepción de los datos enviados mediante POST desde el JS   

$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$destino = (isset($_POST['destino'])) ? $_POST['destino'] : '';
$costo = (isset($_POST['costo'])) ? $_POST['costo'] : '';
echo $usuario;
echo $destino;
$id = (isset($_POST['id'])) ? $_POST['id'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';

switch($opcion){
    case 1: //alta
        $consulta = "INSERT INTO reservaciones (id_usuario, destino1, costo1) VALUES('8', '1', '500') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELEC id_empleado, nombre, apellido_p, apellido_m, correo, direccion, telefono, puesto ORDER BY id_empleado DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2: //modificación
        $consulta = "UPDATE reservaciones SET id_usuario = '$usuario', destino1 = '$destino', costo1='$costo'  WHERE id_reserv='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELEC id_empleado, nombre, apellido_p, apellido_m, correo, direccion, telefono, puesto FROM empleados1 WHERE id_empleado='$id' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3://baja
        $consulta = "DELETE FROM reservaciones WHERE id_reserv='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;        
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
