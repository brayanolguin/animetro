<?php
require_once 'controllers/errores.php';
class App{
    function __construct(){
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        //cuando se ingresa sin definir controlador
        if(empty($url[0])){
            $archivoController = 'controllers/main.php';
            require_once $archivoController;
            $controller = new Main();
            $controller->loadModel('main');
            $controller->render();
            return false;
        }
        
        $archivoController = 'controllers/' . $url[0] . '.php';

        if(file_exists($archivoController)){
            require_once $archivoController;

            //inicializar controlador
            $controller = new $url[0];
            $controller->loadModel($url[0]);

            $size = sizeof($url);
            $funcion = $url[$size-1];
            // si hay un metodo que se requiere cargar
            if (isset($url[1])){
                if(method_exists($url[0], $funcion)){
                    $controller->{$url[1]}();
                }else{
                    $controller = new Errores();
                }
            }else{
                $controller->render();
            }
        }else{
            $controller = new Errores();
            $controller->errorsql = '';
            $controller->render();
        }        
    }
}

?>