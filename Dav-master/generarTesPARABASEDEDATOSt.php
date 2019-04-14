<?php

$conexion = new mysqli("localhost", "root", "", "prog");

    //Ordenado por ascendente
    //$selectCodPregunta = mysqli_query($conexion,"SELECT DISTINCT `pregunta` FROM `respuesta` ORDER BY `pregunta` ASC LIMIT 30");

  

$id=1;
//Cambiar este parametro para el id del test e id del test dentro de testtPreguntas
while($id<101){
  //Ordenador por random 
  
  $selectCodPregunta = mysqli_query($conexion,"SELECT DISTINCT `pregunta` FROM `respuesta` ORDER BY RAND() LIMIT 30");

  while ($AddArray = mysqli_fetch_assoc($selectCodPregunta)) {
      
      $preguntas[] = $AddArray['pregunta'];
  
  }
  $contar = count($preguntas);
var_dump($contar);
  
var_dump($preguntas);

echo "<br>";

//Crear Un nuevo test

mysqli_query($conexion,"INSERT INTO `test` (`id`, `nombre`, `categoria`) VALUES ($id, 'Test$id', '0')");

for ($i=0; $i<$contar ; $i++) { 
    $hola = mysqli_query($conexion,"INSERT INTO `testxpregunta` (`testid`, `preguntaid`) VALUES ('$id', $preguntas[$i])");
    var_dump($hola);
}
unset($preguntas); 
$id++;
}



?>
