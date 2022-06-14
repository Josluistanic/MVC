<?php

class Nuevo extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->render('nuevo/index');
    }

    function registrarAlumno(){
        $matricula  = $_POST['matricula'];
        $nombre     = $_POST['nombre'];
        $apellido   = $_POST['apellido'];

        if ($this->model->insert(['matricula' => $matricula, 'nombre' => $nombre, 'apellido' => $apellido])) {
            echo 'Nuevo alumno registrado';
        }
        //echo 'registrarAlumno()';
    }
}

?>