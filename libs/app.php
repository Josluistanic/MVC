<?php
require_once 'controllers/error.php';

class App
{
    function __construct()
    {
        //echo '<p> Nueva app - Ejecutando el constructor de  libs/app.php</p>';
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');                                //Elimino / del final de la url del
        $url = explode('/', $url);                              //Crea un array con elementos separados por / 

        if(empty($url[0])){
            $archivoController = 'controllers/main.php';
            require_once $archivoController;
            $controller = new Main();
            return false;
        }



        
        $archivoController = 'controllers/' . $url[0] . '.php';

        if (file_exists($archivoController)) {                  //Si existe el controlador ingresado
            require_once $archivoController;                    //llamo al archivo del controlador
            $controller = new $url[0];                          //Saco solo el nombre del controlador

            if (isset($url[1])) {                               //Si existe el method/function en el controlador
                $controller->{$url[1]}();                       //Ejecuto el method/function que solicitan
            } else {
                //$controller = new resError();
            }
        } else {
            $controller = new resError();
        }
    }
}
