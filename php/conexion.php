<?php 
class Conexion{	  
    public static function Conectar() {        
        define('servidor', '10.209.81.2');
        define('nombre_bd', '1006416-66');
        define('usuario', '1006416_nm87030');
        define('password', 'Utd_2020');					        
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
        try{
            $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);			
            return $conexion;
        }catch (Exception $e){
            die("El error de Conexión es: ". $e->getMessage()) ;
            
        }
    }
}