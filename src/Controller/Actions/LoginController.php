<?php



namespace PPR\Controller\Actions;

use PPR\Core\Controller;
use PPR\Controller\Request;
use PPR\Controller\Response;
use PPR\Entity\Usuario;


/*
*LoginController
*/

class LoginController extends Controller
{
    function __construct()
    {
    }

    function index($request)
    {
        $user = new Usuario();

        var_dump($request);

        $user->loginUsuario($user,$pass);

        if($user)
        return $this->render("home/hacertest");
    }

    function sucio($request)
    {
        $user = new Usuario();

        $login = $user->loginUsuario('david','hola');   

        if($login)
            return header("Location: ../dashboard");

        else
            return header("Location: ../");

    }

    function logout($request)
    {
        session_start();
        unset($_SESSION['username']);
        return header("Location: ../");

    }
}

?>