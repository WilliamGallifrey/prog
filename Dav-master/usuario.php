<?php


require_once('conexion.php');   

class usuario extends conexion{
    private $conexion;

    function __construct(){
        $this->conexion=parent::__construct();
    }

    public function registrarUsuario($conexion){

        if ((isset($_POST['nombre']))&&(isset($_POST['email']))&&(isset($_POST['password']))) {

            $nombre = stripslashes($_POST['nombre']);
            $email = stripslashes($_POST['email']);
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            mysqli_query($conexion,"INSERT INTO `usuario` (`usuario`, `email`, `password`) VALUES ('$nombre', '$email', '$password')");
             return "Se ha registrado con exito.";
    
        }else{


            return "<h2>Tienes que rellenar todos los campos</h2>";
        }

     


    }

}
