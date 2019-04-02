<?php

namespace PPR\Controller\Actions;

use PPR\Core\Controller;
use PPR\Controller\Request;
use PPR\Controller\Response;
use PPR\Entity\EntidadPrueba;


/*
*HomeController
*/

class HomeController extends Controller
{
    function __construct()
    {
    }

    function index(Request $request)
    {
        $ep = new EntidadPrueba();
        $eps = $ep->listAll();
    }

}

?>