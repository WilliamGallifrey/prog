<?php

namespace PPR\Controller;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

/*
*Kernel
*/

class Kernel
{
    private $router;
    private $request;
    private $logger;

    function __construct()
    {
        $this->router = new Router();
        $this->request = new Request();
        $this->logger = new Logger('ppr');

    }

    public function start_kernel()
    {
        $this->router->start_router();
        $this->router->parse_route($this->request);
        $this->logger->pushHandler(new StreamHandler(__DIR__.'/../../var/log/ppr_log.log', Logger::DEBUG));
        $this->logger->info("Kernel ha sido lanzado");
    }
}

?>