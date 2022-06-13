<?php

class Main extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->render('main/index');
        //echo '<p> Ejecutando el constructor de la clase Main en controllers/main.php</p>';
    }

    function saludo(){
        echo '<p> Ejecutando el método saludo() de la clase Main en controllers/main</p>';
    }
}

?>