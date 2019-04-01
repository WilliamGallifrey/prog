<?php
namespace PPR\Core;

/*
*Controller interface
*/

interface ControllerInterface
{
    public function index(Request $request);
    public function render($view,$layout);

}
?>