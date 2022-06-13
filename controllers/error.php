<?php
class resError extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->mensaje = 'Error general';     //Pasando informacion desde el controlador a la vista
        $this->view->render('error/index');
        //echo '<p>Ejecutando el constructor de controllers/resError</p>';
    }
}
?>