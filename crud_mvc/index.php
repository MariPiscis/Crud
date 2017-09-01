<?php

require_once "bd/conexion.php";

$controller='empleados';

//Esto hara el papel de un frontcontroller
if(!isset($_REQUEST['c']))
{
    require_once "controller/$controller"."_controller.php";
    $controller = ucwords($controller) . '_controller';
    $controller = new $controller;
    $controller->Index();
}
else
{ 
    //obtenemos el controlador que queremos cargar
    $controller = strtolower($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'index';

    //instanciamos el controlador
    require_once "controller/$controller"."_controller.php";
    $controller = ucwords($controller) . '_controller';
    $controller = new $controller;

    //llama a la accion
    call_user_func( array( $controller, $accion ) );
}

?>