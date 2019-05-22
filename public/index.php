<?php
require_once __DIR__.'/../vendor/autoload.php';
require_once "../src/Config/config.php";
use PPR\Controller\Kernel;

if(session_status() == PHP_SESSION_NONE)
session_start();

$k= new Kernel();
$k->start_kernel();
$k->start_action();
$k->finish_kernel();
?>