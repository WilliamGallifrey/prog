<?php

class conexion{


    private $conexion=null;

    function __construct(){
        $this->conexion = new mysqli("localhost", "root", "", "prog");
        if ($this->conexion->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
        }else{
           
        }
    }

    public function getConexion(){
        return $this->conexion;
    }
    
    

}