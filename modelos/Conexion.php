<?php
class Conexion {
    static public function conectar(){
        $conexion=new PDO("mysql:host=localhost;dbname?=blog22026","root","123456");
        return $conexion;
    }
}

?>