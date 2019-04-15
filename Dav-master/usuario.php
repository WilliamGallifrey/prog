<?php


require_once('conexion.php');   

class usuario extends conexion{
    private $conexion;
    private $usuario="";

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


    public function loginUsuario($conexion){

        if(isset($_POST['username'])&&isset($_POST['password'])){
            $usuario = trim($_POST['username']);
            $password = trim($_POST['password']);
            $sql = "SELECT * FROM usuario WHERE usuario = '".$usuario."'";
            $result = mysqli_query($conexion,$sql);
            $numRows = mysqli_num_rows($result);
            
            if($numRows  == 1){
                $row = mysqli_fetch_assoc($result);
                if(password_verify($password,$row['password'])){
                    echo "Logeado Correctamente";
                    
                    session_start();
                    $_SESSION['username'] = $usuario;

                    $this->usuario = $_SESSION['username'];
                    return $this->usuario;
                
                }
                else{
                    echo "Contraseña incorrecta";
                }
            }
            else{
                 echo "No existe una cuenta con ese usuario";
            }
        }
         

    } 

    public function getUsuarioOnline(){
        if(session_status () == PHP_SESSION_NONE)
        {
            session_start();
        }

        if (isset($_SESSION['username'])) {            
          return $_SESSION['username'];     
        }
        else{
           return header("Location: login.php");
           }
      


    }
    
    


}
