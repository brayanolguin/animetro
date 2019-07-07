<?php 

class Admin extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->upload = "upload: ";
        $this->view->type = "Type: ";
        $this->view->size = "Size: ";
        $this->view->stored = "Stored in: ";
        $this->view->error = "Error: ";
        $this->view->btnVolver = "Error: ";
        $this->view->redsocial = [];
        $this->view->sucursales = [];
    }

    function render(){
        $redessociales = $this->model->getRedSocial();
        $this->view->redsocial = $redessociales;
        $sucursales = $this->model->getSucursal();
        $this->view->sucursales = $sucursales;
        $this->view->render('admin/index');
    }

    function subirImagen(){
        $directorio = isset($_POST['directorio']) ? $_POST['directorio'] : '';
        if ($_FILES['archivo']['error'] > 0){
            $this->view->error = "Error: " . $_FILES['archivo']['error'];
        }else{
            $this->view->upload = "upload: ". $_FILES['archivo']['name'];
            $this->view->type = "Type: ". $_FILES['archivo']['type'];
            $this->view->size = "Size: ". ($_FILES['archivo']['size'] / 1024) . "kb";
            $this->view->stored = "Stored in: ". $_FILES['archivo']['tmp_name'];

            move_uploaded_file($_FILES['archivo']['tmp_name'], 'C:\xampp\htdocs\TuManga\public\images/'.$directorio."/". $_FILES['archivo']['name']);

            $this->view->btnVolver = "<a href='/tumanga/admin'>Volver</a>";
        }

        $this->view->render('admin/index');
    }
    
}

if (isset($_POST['action']) && !empty(isset($_POST['action'])) ){
    echo $_POST['action'];
    $action = $_POST['action'];
    switch( $action ) {
        case "subirImagen":{
           return subirImagen(); // or call here one();
        }break;
    
        case "two":{
           return 2; // or call here two();
        }break;
    
        default: {
          // do not forget to return default data, if you need it...
        }
    }
}

?>