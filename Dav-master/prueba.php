<?php
session_start();
require('test.php');
require('usuario.php');
$test = new test();
$conexion=$test->getConexion();
$usuario = new usuario();
$usuario->getUsuarioOnline();


if (!empty($_POST)) {
    $corregirTest = $test->corregirTest($conexion, $_SESSION['username']);

    
    
}else {
    $generarTest = $test->generarTest($conexion);
 
}

