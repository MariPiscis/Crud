<?php

require_once 'model/empleado_model.php';
require_once 'model/plaza_model.php';

class empleados_controller{
    private $model_e;
    private $model_p;

    function __construct(){
        $this->model_e = new empleado_model();
        $this->model_p = new plaza_model();
    }

    function index(){
        $title = "Empleados";
        $query = $this->model_e->get();
        require_once 'view/header.php';
        require_once 'view/index.php';
        require_once 'view/footer.php';
    }

    function empleados(){
        $data = NULL;
        if (isset($_REQUEST['id'])){
            $data = $this->model_e->getId($_REQUEST['id']);
        }

        $title ="Empleados";
        $query = $this->model_p->get();

        require_once 'view/header.php';
        require_once 'view/empleados.php';
        require_once 'view/footer.php';

    }

    function guardar(){
        $data['numero_empleado'] = $_REQUEST['numero_empleado'];
        $data['nombre'] = $_REQUEST['nombre'];
        $data['apellido1'] = $_REQUEST['apellido1'];
        $data['apellido2'] = $_REQUEST['apellido2'];
        $data['plaza'] = $_REQUEST['sel_plaza'];
        $data['activo'] = $_REQUEST['activo'];

        $id = $_REQUEST['txt_id'];
        $id > 0 ?

        $this->model_e->edit($data, $id):
        $this->model_e->add($data);

        header('Location: index.php');

    }

    function delete($id){
        $id = $_REQUEST['id'];
        $this->model_e->delete($id);
        header('Location: index.php');
    }

}
?>