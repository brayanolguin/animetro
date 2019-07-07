<?php 

class Main extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->redsocial = [];
        $this->view->sucursales = [];
        $this->view->productosDestacados = [];
        $this->view->errorsql = '';
        $this->view->numerror = 0;
    }

    function render(){
        $error = false;

        $ultManga = $this->model->getUltimoManga();
        $this->view->ultimoManga = $ultManga;
      
        $redessociales = $this->model->getRedSocial();
        $this->view->redsocial = $redessociales;

        $ultOferta = $this->model->getUltimaOferta();
        $this->view->ultimaOferta = $ultOferta;

        $sucursales = $this->model->getSucursal();
        $this->view->sucursales = $sucursales;
        
        $prodDest = $this->model->getUltimosProductos();
        $this->view->productosDestacados = $prodDest;

        $this->view->render('main/index');
    }
    
}

?>