<?php 

class Nuevo extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->mensaje = "";
    }

    function render(){
        $this->view->render('nuevo/index');
    }

    function registrarNuevoAlumno(){
        $matricula = isset($_POST['matricula']) ? $_POST['matricula'] : '';
        $nombre    = isset($_POST['nombre']) ? $_POST['nombre'] : '';
        $apellido  = isset($_POST['apellido']) ? $_POST['apellido'] : '';

        $mensaje = "";

        if ($matricula == '' || $nombre == '' || $apellido = ''){
            $mensaje = "Debe completar los campos";
        }else{
            if($this->model->insert(['matricula' => $matricula, 'nombre' => $nombre, 'apellido' => $apellido])){
                $mensaje = "Nuevo alumno creado";
            }else{
                $mensaje = "Alumno ya existe";
            }
        }

        $this->view->mensaje = $mensaje;
        $this->render();
    }
}

?>