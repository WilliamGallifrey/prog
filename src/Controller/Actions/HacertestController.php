<?php

namespace PPR\Controller\Actions;

use PPR\Core\Controller;
use PPR\Entity\Test;


/*
*PracticaController
*/

class HacertestController extends Controller
{
    function __construct()
    {
    }

    function index($request){
        if(!isset($_SESSION['username']))
            header("Location: ./");
        else 
            return $this->render("home/hacertest");
      }

      
    function elegido($request)
    {
        $testid = $_POST['testid'];
        $testobj = new Test();
        $test = $testobj->generarTest($testid);

        $testnombre = $testobj->getNombreId($testid);

        $row = \mysqli_fetch_assoc($testnombre);

        $testnombre = $row['nombre'];

        $data['test'] = $test;
        $data['testnombre'] = $testnombre;

        if(!isset($_SESSION['username']))
            header("Location: ./");
        else
            return $this->render("home/hacertest",$data);
    }

    function corregir()
    {


        $data['res'] = $_POST;
        return $this->render("home/corregir",$data);
    }
      
    

}

?>