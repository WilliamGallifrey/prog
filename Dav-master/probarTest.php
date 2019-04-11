<?php
header("Content-Type: text/html;charset=utf-8");
$conexion = new mysqli("localhost", "root", "", "prog");
echo "<meta http-equiv='Content-type' content='text/html; charset=utf-8' />";
echo  "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>";

//Sacamos el test aleatorio
$randomTest = mt_rand(1,100);

//Selecionamos todas las preguntas de dicho test
$selectTodasLasPreguntas = mysqli_query($conexion,"SELECT `preguntaid` FROM `testxpregunta` where `testid` = $randomTest ORDER BY RAND()");

while ($AddArray = mysqli_fetch_assoc($selectTodasLasPreguntas)) {
    //Las almacenamos en un array
    $preguntas[] = $AddArray['preguntaid'];

}

$contar = count($preguntas);


for ($i=0; $i <$contar ; $i++) { 
    //Seleccionamos toda la informacion de dicha pregunta.

    $infoPregunta = mysqli_query($conexion,"SELECT * FROM `prog`.`pregunta` WHERE `codpregunta` = $preguntas[$i]");
    while ($addPreguntatodo = mysqli_fetch_assoc($infoPregunta)) {
        //Las almacenamos en un array
        $codpreguntas[] = $addPreguntatodo['codpregunta'];
        $texto[] = $addPreguntatodo['texto'];
        $imagen[] = $addPreguntatodo['imagen'];
        $tema[] = $addPreguntatodo['tema'];
    
    }

}
$contar2= count($codpreguntas);
//Selecionamos todas las respuestas de dicha pregunta

    
for ($z=0; $z <$contar2 ; $z++) { 


    $infoRespuesta = mysqli_query($conexion,"SELECT * FROM `respuesta` WHERE `pregunta` = $codpreguntas[$z]");

    while ($infoRespuestaTodo = mysqli_fetch_assoc($infoRespuesta)) {
        //Las almacenamos en un array
        $codrespuesta[] = $infoRespuestaTodo['codrespuesta'];
        $textorespuesta[] = $infoRespuestaTodo['texto'];
        $correcta[] = $infoRespuestaTodo['correcta'];
        $pregunta[] = $infoRespuestaTodo['pregunta'];
    
    }

}
//$contarTest = count($correcta); 
//Generamos el test.

$a=0;
$b=1;
$c=2;
echo "<form action ='comprobar.php' method='POST' name='test'>";
for ($y=0; $y < 30 ; $y++) { 
    echo utf8_encode( "<h2>$texto[$y]</h2>");
    echo "<img src='$imagen[$y]'><br>";
    
   
   while (true){
    
    echo utf8_encode( "<input type=radio name=respuesta$y>".$textorespuesta[$a]."<br>");
    echo utf8_encode( "<input type=radio name=respueta$y>".$textorespuesta[$b]."<br>");
    echo utf8_encode( "<input type=radio name=respueta$y>".$textorespuesta[$c]."</input><br>");
        break;
    }

     $a=$a+3;
     $b=$b+3;
     $c=$c+3;
    
   
}
echo "<input type='submit' value='Corregir'>";
