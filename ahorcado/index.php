<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ahorcado</title>
    <link href="./estilos.css" rel="stylesheet">
</head>
<body>

    <?php

        include_once 'ahorcado.inc.php';

        $palabras = ["Rinoceronte", "Electricidad", "Antibiotico", "coyuntura", "Cuadriplejia", "Excremento", "Hemiplejia", "Diagnostico"];

        if(!isset($_POST['letra']) || !isset($_POST['oportunidad'])){

            echo '<h1 class="bienve">Bienvenido al Juego del Ahorcado</h1>';

            $letra = "";
            $oportunidad = 6;

            $dibujo = "";

            $respuesta = $palabras[rand(0, 7)];
            $misterio = "";

            //echo $respuesta;

            for($i = 0; $i < strlen($respuesta); $i++){

                $misterio[$i] = "_";

            }

        }else{

                $oportunidad = $_POST['oportunidad'];
                $misterio = $_POST['misterio'];
                $letra = $_POST['letra'];
                $respuesta = $_POST['respuesta'];
                $respuestaArray = $respuesta;

                $respuestaArray = strtoupper($respuestaArray);
                $respuestaArray = str_split($respuestaArray);

                //echo strlen($respuesta);

                //echo $oportunidad;

                //echo $misterio;
                //echo $respuesta;
                //print_r($palabras);

                if($oportunidad > 0){

                    if(strlen($letra) > 1){

                        if(strtoupper($letra) == strtoupper($respuesta)){

                            echo '<p class="victoria">Enhorabuena, has ganado</p>';

                        }

                    }else{

                        //print_r($respuestaArray);
                        //echo $letra;

                        if(!in_array(strtoupper($letra), $respuestaArray)){
        
                            $oportunidad--;
    
                        }else{

                            for($i = 0; $i < strlen($respuesta); $i++){

                                //echo "Entra for";
            
                                //echo $respuesta[$i] . "<br>";
            
                                if(strtoupper($letra) == strtoupper($respuesta[$i])){
            
                                    $misterio[$i] = strtoupper($letra);
                                    //echo $letra;
            
                                }
                                
                            }
                        }

                        $dibujo = dibuja($oportunidad);
                        
                        echo $dibujo;

                        echo "<p> Te quedan " . $oportunidad . " oportunidades </p>";
                        
                        for($i = 0; $i < strlen($respuesta); $i++){

                            echo $misterio[$i] . "&nbsp;";

                        }
                    }
            }
        }

        if($oportunidad > 0){
    ?>
    
    <form action="#" method="post">


        <label for="letra">Letra/Palabra</label>
        <input type="text" name="letra" autofocus>
        <input type="hidden" name="misterio" value="<?php echo $misterio ?>">
        <input type="hidden" name="oportunidad" value="<?php echo $oportunidad ?>">
        <input type="hidden" name="respuesta" value="<?php echo $respuesta ?>">

    <p>
        <input type="submit" value="Enviar">
    </p>
    </form>

    <?php

        }else if($oportunidad < 1){

                echo "<p>Has perdido todas las oportunidades</p>";

                echo '<p class="Respuesta">La palabra era <span class="clave">' . $respuesta . '</span></p>';

        }

    ?>
</body>
</html>