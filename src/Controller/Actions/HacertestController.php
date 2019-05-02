<?php

namespace PPR\Controller\Actions;

use PPR\Core\Controller;


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
      
    

}

?>