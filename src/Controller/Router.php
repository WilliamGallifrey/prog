<?php

namespace PPR\Controller;

/*
*Router
*/

class Router
{
    private $url = null;
    private const URL_START_DELETE = "/prog/public/";
    function __construct()
    {
        
    }

    public function start_router()
    {
        $this->url = $_SERVER['REQUEST_URI'];
    }

    public function parse_route($request)
    {
        $this->url = str_replace($this::URL_START_DELETE,"",$this->url);
        var_dump($this->url);
    }
}

?>