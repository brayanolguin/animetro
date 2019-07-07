<?php 

class Productos extends Controller{
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

        $tiposlibros = $this->model->getTipoLibro();
        $this->view->tiposlibros = $tiposlibros;

        $productos = $this->model->getProductos();
        $this->view->productos = $productos;

        $totalproductos = $this->model->getTotalProductos();
        $this->view->totalproductos = $totalproductos;

        $this->view->render('productos/index');
    }
    
}

?>