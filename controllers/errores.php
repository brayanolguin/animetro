<?php 

class Errores extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->errorsql = '';
    }

    function render(){
        $this->view->render('errores/index');
    }
}

?>