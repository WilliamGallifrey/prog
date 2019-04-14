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


    public function loginUsuario($conexion){

    if (isset($_POST['usuario'])){
        $username = stripslashes($_REQUEST['usuario']);
        $username = mysqli_real_escape_string($conexion,$username);
        $password = password_hash($_REQUEST['password'],PASSWORD_DEFAULT);
        $query = "SELECT * FROM `usuario` WHERE usuario='$username'and password='$password'";
        $result = mysqli_query($conexion,$query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
            if($rows==1){
                            
                        $_SESSION['username'] = $username;
                        header("Location: dashboard.php");       
                      
                    }else{
                        echo "<h3><b>La combinación entre nombre de usuario y cuenta no existe.</b</h3>";
                        header( "refresh:3;url=login.php");
                    }
              
            }        
            
        }


}
