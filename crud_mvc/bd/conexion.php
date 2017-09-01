<?php
class conexion{
    public static function getConnection(){
        $conex=new mysqli("localhost","root","","capacitacion");
        $conex->query("SET NAMES 'utf8'");
        return $conex;
    }
}

?>