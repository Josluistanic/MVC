<?php

class NuevoModel extends Model{
    public function __construct(){
        parent::__construct();
    }

    public function insert(){               //Insertar datos en DB
        echo 'insertar datos';
    }
}
?>