<?php

class View{
    function __construct(){
        //echo '<p>Ejecutando el constructor de la clase View en libs/view.php archivo base de vistas</p>';
    }


    function render($nombre) {
        require 'views/'.$nombre.'.php';
    }
}

?>