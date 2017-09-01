<?php

class plaza_model{
    private $DB;
    private $plazas;

    function __construct(){
        $this->DB = conexion::getConnection();
        $this->plazas=array();
    }

    function get(){
        
        $query = $this->DB->query("SELECT *FROM plazas where activo='1' ");
        while($fila =$query->fetch_assoc()){
            $this->plazas[]=$fila;
        }
        return $this->plazas;
    }
}

?>