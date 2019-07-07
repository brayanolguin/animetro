<?php 

class Contacto extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->redsocial = [];
        $this->view->sucursales = [];
        $this->view->error = '';
        $this->view->nombre = '';
        $this->view->telefono = '';
        $this->view->correo = '';
        $this->view->msj = '';
        $this->view->errorNombre = '';
        $this->view->errorFono = '';
        $this->view->errorCorreo = '';
        $this->view->errorMsj = '';
    }

    function render(){
        $redessociales = $this->model->getRedSocial();
        $this->view->redsocial = $redessociales;
        $sucursales = $this->model->getSucursal();
        $this->view->sucursales = $sucursales;
        $this->view->render('contacto/index');
    }

    function enviarMensaje(){
        $nombre     = isset($_POST['nombre']) ? $_POST['nombre'] : '';
        $telefono   = isset($_POST['telefono']) ? $_POST['telefono'] : '';
        $correo     = isset($_POST['correo']) ? $_POST['correo'] : '';
        $msj        = isset($_POST['msj']) ? $_POST['msj'] : '';

        $error = "";

        if ($nombre == '' || $telefono == '' || $correo == '' || $msj == ''){
            $error = "Debe completar los campos";
            if ($nombre == '') {
                $this->view->errorNombre = 'input-error';
            };
            if ($telefono == '') {
                $this->view->errorFono = 'input-error';
            };
            if ($correo == '') {
                $this->view->errorCorreo = 'input-error';
            };
            if ($msj == '') {
                $this->view->errorMsj = 'input-error';
            };  
        }else{
            if($this->model->sendEmail(['nombre' => $nombre, 'telefono' => $telefono, 'correo' => $correo, 'msj' => $msj])){
                $error = "Mensaje enviado exitosamente";
                $nombre = "";
                $telefono = "";
                $correo = "";
                $msj = "";
            }else{
                $error = "Ha ocurrido un error y no se pudo enviar el mensaje";
            }
        }

        $this->view->error = $error;
        $this->view->nombre = $nombre;
        $this->view->telefono = $telefono;
        $this->view->correo = $correo;
        $this->view->msj = $msj;
        $this->render();
    }
}

?>