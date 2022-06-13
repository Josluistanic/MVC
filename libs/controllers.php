<?php

class Controller{
    function __construct(){
        //echo '<p> Ejecutando el constructor de mi clase Controller que sirve de clase padre</p>';
        $this->view = new View();
    }
}

?>