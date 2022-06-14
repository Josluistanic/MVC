<?php
require_once 'controllers/errors.php';

class App{
    function __construct(){
        //echo '<div>App</div>';

        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        //var_dump($url);

        if (empty($url[0])) {                               //Ingreso sin controlador
            $archivo_controller = 'controllers/main.php';
            require_once $archivo_controller;
            $controller = new Main(); 
            $controller->loadModel('main');
            $controller->render();
            return false;
        }

        $archivo_controller = 'controllers/'.$url[0].'.php';

        if(file_exists($archivo_controller)){
            require_once $archivo_controller;
            $controller = new $url[0];              //Inicializar controlador
            $controller->loadModel($url[0]);        //llamar al modelo

            if(isset($url[1])){                     //Si hay un metodo en la URL
                $controller->{$url[1]}();
            }else{
                $controller->render();
            }

            
        }else{
            $controller = new Errors();
        }
    }
}
?>