<?php

namespace PPR\Controller;

/*
*Kernel
*/

class Kernel
{
    private $router;
    private $request;

    function __construct()
    {
        $this->router = new Router();
        $this->request = new Request();

    }
}

?>