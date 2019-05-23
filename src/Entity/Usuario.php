<?php
namespace PPR\Entity;

use PPR\Core\Model;


/*
*Usuario
*/

class Usuario extends Model
{
    private $id = "";
    private $pass = "";
    private $usuario="";
    private $conexion;

    function __construct(){
        
        $this->conexion = parent::getBdd();

    }

    public function listAll()
    {
        $consulta = "SELECT * FROM usuario";
        $resultado = $this->conexion->query($consulta);

        return $resultado;
    }

    public function registrarUsuario($conexion){

        if ((isset($_POST['nombre']))&&(isset($_POST['email']))&&(isset($_POST['password']))) {

            $nombre = stripslashes($_POST['nombre']);
            $email = stripslashes($_POST['email']);
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $this->conexion->query("INSERT INTO `usuario` (`usuario`, `email`, `password`) VALUES ('$nombre', '$email', '$password')");
            return "Se ha registrado con exito.";
    
        }else{


            return "<h2>Tienes que rellenar todos los campos</h2>";
        }
    }

    public function loginUsuario($user,$pass){

            $usuario = trim($user);
            $password = trim($pass);
            $sql = "SELECT * FROM usuario WHERE usuario = '$usuario'";
            $result = $this->conexion->query($sql);


            $numRows = mysqli_num_rows($result);
            
            if($numRows  == 1){
                $row = mysqli_fetch_assoc($result);
                if(password_verify($password,$row['password']))
                {                   
                    $_SESSION['username'] = $user;

                    $this->usuario = $_SESSION['username'];
                    return true;
                }
                else
                {
                    return false;
                }
            }
            else
            {
                return false;
            }
        
    }

    public function getUsuarioOnline()
    {
        if(session_status () == PHP_SESSION_NONE)
        {
            session_start();
        }

        if (isset($_SESSION['username'])) 
        {            
          return $_SESSION['username'];     
        }
        else
        {
           return header("Location: login.php");
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setId($id)
    {
        $this->id = $id ;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre ;
    }

}
