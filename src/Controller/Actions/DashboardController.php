<?php

namespace PPR\Controller\Actions;

use PPR\Core\Controller;


/*
*MenuController
*/

class DashboardController extends Controller
{
    function __construct()
    {
    }

    function index($request){

        if(!isset($_SESSION['username']))
            header("Location: ./");
        else
            return $this->render("home/dashboard");
      }
    

}

?>