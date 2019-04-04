<?php

namespace PPR\Controller\Actions;

use PPR\Core\Controller;


/*
*MenuController
*/

class LoginController extends Controller
{
    function __construct()
    {
    }

    function index($request){
       return $this->render("home/dashboard");
      }
    

}

?>