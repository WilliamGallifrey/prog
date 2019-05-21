<?php

namespace PPR\Controller\Actions;

use PPR\Core\Controller;


/*
*TestController
*/

class TestController extends Controller
{
    function __construct()
    {
    }

    function index($request){
        return $this->render("home/testlist");
    }
    
    function do($request){
        return $this->render("home/test");
    }


    

}

?>