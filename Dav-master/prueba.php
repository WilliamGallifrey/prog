<?php

require('test.php');
$test = new test();
$conexion=$test->getConexion();

if (!empty($_POST)) {
    $corregirTest = $test->corregirTest($conexion);
    
}else {
    $generarTest = $test->generarTest($conexion);
 
}

