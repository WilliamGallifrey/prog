<?php

require_once('conexion.php');   

class test extends conexion{
    private $conexion;


    function __construct(){
        $this->conexion=parent::__construct();

    }

    public function generarTest($conexion){
        //Sacamos el test aleatorio
        $randomTest = mt_rand(1,100);
        
      
        $selectTodasLasPreguntas = mysqli_query($conexion,"SELECT `preguntaid` FROM `testxpregunta` where `testid` = $randomTest ORDER BY RAND()");
        
        while ($AddArray = mysqli_fetch_assoc($selectTodasLasPreguntas)) {
        
            $preguntas[] = $AddArray['preguntaid'];
        
        }
        
        $contar = count($preguntas);
        
     
        for ($i=0; $i <$contar ; $i++) { 
       
            $infoPregunta = mysqli_query($conexion,"SELECT * FROM `prog`.`pregunta` WHERE `codpregunta` = $preguntas[$i]");
            while ($addPreguntatodo = mysqli_fetch_assoc($infoPregunta)) {
                
                $codpreguntas[] = $addPreguntatodo['codpregunta'];
                $texto[] = $addPreguntatodo['texto'];
                $imagen[] = $addPreguntatodo['imagen'];
                $tema[] = $addPreguntatodo['tema'];
            
            }
        
        }
        $contar2= count($codpreguntas);

            
        for ($z=0; $z <$contar2 ; $z++) { 
        
        
            $infoRespuesta = mysqli_query($conexion,"SELECT * FROM `respuesta` WHERE `pregunta` = $codpreguntas[$z]");
        
            while ($infoRespuestaTodo = mysqli_fetch_assoc($infoRespuesta)) {
               
                $codrespuesta[] = $infoRespuestaTodo['codrespuesta'];
                $textorespuesta[] = $infoRespuestaTodo['texto'];
                $correcta[] = $infoRespuestaTodo['correcta'];
                $pregunta[] = $infoRespuestaTodo['pregunta'];
            
            }
        
        }
        
        
        $a=0;
        $b=1;
        $c=2;
        echo "<form action ='prueba.php' method='POST' name='test'>";
        echo "<input type='hidden' name='codigoTest' value='$randomTest'>";
        for ($y=0; $y < 30 ; $y++) { 
            echo utf8_encode( "<h2>$texto[$y]</h2>");
            echo "<img src='$imagen[$y]'><br>";
            
         
           while (true){
            
            echo utf8_encode( "<input type=radio name='respuesta$y' value='$codrespuesta[$a]'>".$textorespuesta[$a]."<br>");
            echo utf8_encode( "<input type=radio name='respuesta$y'  value='$codrespuesta[$b]'>".$textorespuesta[$b]."<br>");
            echo utf8_encode( "<input type=radio name='respuesta$y' value='$codrespuesta[$c]'>".$textorespuesta[$c]."</input><br>");
                break;
                
            }
          
             $a=$a+3;
             $b=$b+3;
             $c=$c+3;
            
           
        }
        echo "<input type='submit' value='Corregir'>";
     
    }
   
    
    public function corregirTest($conexion){
        // Cambiar usuario Y EL id
        $id=1;
        $usuario = "admin";


        $mal = 0;
        $bien = 0;
        for ($i=0; $i <30 ; $i++) {
            $nombreRespuesta="respuesta$i"; 
            $codigoTest=$_POST['codigoTest'];
            if (!isset($_POST[$nombreRespuesta])) {
              $mal = $mal +1;
                
            }else{
                $respuestas[] = $_POST[$nombreRespuesta];
            }
        }
        echo "<br>";
        $contar = count($respuestas);
        
        for ($x=0; $x < $contar ; $x++) { 
            if ($respuestas[$x] != "") {
            $resolver = mysqli_query($conexion,"SELECT `correcta`,`texto`,`pregunta` from `respuesta` where `codrespuesta`  = $respuestas[$x]");
            while ($resuelta = mysqli_fetch_assoc($resolver)) {
                $correcta[] = $resuelta['correcta'];
                $texto[] = $resuelta['texto'];
                $pregunta[] = $resuelta['pregunta'];
                 }
             }
        }

        
        for ($w=0; $w <  $contar; $w++) { 
           if ($correcta[$w] == 1) {
               $bien = $bien + 1;
           }elseif ($correcta[$w] == 0) {
           
            $correcta1 = mysqli_query($conexion,"SELECT `texto` from `pregunta` where `codpregunta` = $pregunta[$w]");
            while ($correcta2 = mysqli_fetch_assoc($correcta1)) {
                $correcta3 = $correcta2['texto'];
              
            }
            $correct1 = mysqli_query($conexion,"SELECT `texto` from `respuesta` where `pregunta` = '$pregunta[$w]' and `correcta` = '1' ");
            while ($correct2 = mysqli_fetch_assoc($correct1)) {
                $correct3 = $correct2['texto'];
              
            }
            $errorxTest= mysqli_query($conexion, "INSERT INTO `failsxusu` (`idUsuario`, `idfalla`) VALUES ( $id,'$pregunta[$w]')");       
            
               echo "<b>Has fallado en esta pregunta:</b> ".utf8_encode($correcta3). " <b>La respuesta correcta era:</b> " .utf8_encode($correct3)." <br>";
               $mal = $mal + 1;
           }else {
               Echo "Te has dejado por contestar la pregunta $w";
           }
        }
    
            echo "<br>";
            echo "<br>";
            if ($mal > 2) {
                echo "<h2>Has suspendido</h2>";
                echo "Tienes ".$mal." fallos<br>";
                $resultadoTest = "NO APTO";
            }else{
                echo "<h2>Has aprobado</h2>";
                echo $bien."<br>";
                $resultadoTest = "APTO";

                
            }
            //Hacemos el insert my people
            $insertamosEltest= mysqli_query($conexion,"INSERT INTO `historialtest` (`idTest`, `usuario`, `resultado`) VALUES ($codigoTest, '$usuario', '$resultadoTest')");       

    
    }
            
         
       

       
        
    

} 