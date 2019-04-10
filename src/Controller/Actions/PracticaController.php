<?php

namespace PPR\Controller\Actions;

use PPR\Core\Controller;


/*
*PracticaController
*/

class PracticaController extends Controller
{
    function __construct()
    {
    }

    function index($request){
       return $this->render("home/practica");
      }
    

}

?>