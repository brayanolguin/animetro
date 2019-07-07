<?php 

class Controller{
    function __construct(){
        $this->view = new View();
    }

    function loadModel($model){
        $url = 'models/' . $model . 'model.php';

        if (isset($url)){
            require $url;

            $modelName = $model.'Model';
            $this->model = new $modelName();
        }
    }
}

?>