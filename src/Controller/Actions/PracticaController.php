<?php

namespace PPR\Controller\Actions;

use PPR\Core\Controller;
use PPR\Entity\Test;


/*
*PracticaController
*/

class PracticaController extends Controller
{
    function __construct()
    {
    }

    function index($request){

        $test = new Test();

        $tests = $test->listAll();
        $data['tests'] = $tests;

        if(!isset($_SESSION['username']))
            header("Location: ./");
        else
            return $this->render("home/practica",$data);
      }

    

}

?>