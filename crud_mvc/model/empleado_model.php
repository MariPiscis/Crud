<?php

class empleado_model{
    private $DB;
    private $empleados;

    function __construct(){
        $this->DB = conexion::getConnection();
        $this->empleados=array();
    }

    function get(){       
        $query = $this->DB->query("SELECT *FROM empleados where activo=1 ");
        //$query = $this->DB->query("SELECT *FROM empleados, plazas where empleados.plaza=plazas.id AND plazas.activo='1' AND empleados.plaza='1' ");
        while($fila =$query->fetch_assoc() ){
            $this->empleados[]=$fila;
        }
        return $this->empleados;
    }
 
    function getId($id){
        $query = $this->DB->query("SELECT *FROM empleados where id=$id");     
        while($fila = $query-> fetch_assoc()){
            $this->empleados = $fila;
        }
        return $this->empleados;
    }

    function add($data){
        $sql = "INSERT INTO empleados (numero_empleado, nombre, apellido1, apellido2, plaza, activo) VALUES"."
        ('".$data['numero_empleado']."', '".$data['nombre']."', '".$data['apellido1']."', '".$data['apellido2'].
        "', '".$data['plaza']."', '".$data['activo']."')";
        mysqli_query($this->DB, $sql) or die ('error \n'.mysqli_error($this->DB));
    }

    function edit($data, $id){
        $sql = "UPDATE empleados SET nombre='".$data['nombre']."',
        apellido1='".$data['apellido1']."',
        apellido2='".$data['apellido2']."',
        plaza='".$data['plaza']."',
        activo='".$data['activo']."'
        WHERE id = $id";

        mysqli_query($this->DB, $sql) or die ('error \n'.mysqli_error($this->DB));
    }

    function delete($id){
        $sql = "UPDATE empleados SET activo=0 where id=$id";
        
        mysqli_query($this->DB, $sql) or die ('error \n'.mysqli_error($this->DB));
    }
}

?>

