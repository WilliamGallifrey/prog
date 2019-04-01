<?php

namespace PPR\Controller\Actions;

use PPR\Core\Controller;


/*
*MenuController
*/

class MenuController implements Controller
{
    function __construct()
    {
        echo "MenuController";
    }

    function index($request)
    {
        echo"index";
    }
}

?>