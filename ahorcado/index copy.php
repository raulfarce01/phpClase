<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ahorcado</title>
</head>
<body>

    <?php

        include_once 'ahorcado.inc.php';

        $palabras = ["Rinoceronte", "Electricidad", "Antibiotico", "coyuntura", "Cuadriplejia", "Excremento", "Hemiplejia", "Diagnostico"];

        if(!isset($_POST['letra']) || !isset($_POST['oportunidad'])){

            $letra = "";
            $oportunidad = 6;

            $respuesta = $palabras[rand(0, 7)];
            $misterio = "";

            $fallo = 0;

            //echo $respuesta;

            for($i = 0; $i < strlen($respuesta); $i++){

                $misterio[$i] = "_";

            }

        }else{

                $oportunidad = $_POST['oportunidad'];
                $misterio = $_POST['misterio'];
                $letra = $_POST['letra'];
                $respuesta = $_POST['respuesta'];

                //echo strlen($respuesta);

                echo $oportunidad;

                //echo $misterio;
                //echo $respuesta;
                //print_r($palabras);

                if($oportunidad > 0){

                    if(strlen($letra) > 1){

                        if(strtoupper($letra) == strtoupper($respuesta)){

                            echo 'Enhorabuena, has ganado';

                        }

                    }else{

                        for($i = 0; $i < strlen($respuesta); $i++){

                            //echo "Entra for";
        
                            //echo $respuesta[$i] . "<br>";
        
                            if(strtoupper($letra) == strtoupper($respuesta[$i])){
        
                                $misterio[$i] = strtoupper($letra);
                                //echo $letra;
        
                            }
        
                            if(strtoupper($letra) != strtoupper($letra)){

                                if($fallo == strlen($respuesta)-1){

                                    $oportunidad--;

                                }
        
                                $dibujo = dibuja($oportunidad);
        
                            }
                        }

                        echo $dibujo;

                        echo "<p> Te quedan " . $oportunidad . " oportunidades </p>";
                        
                        for($i = 0; $i < strlen($respuesta); $i++){

                            echo $misterio[$i] . "&nbsp;";

                        }
                    }

                
            }else{

                echo "Has perdido todas las oportunidades";

            }

        }

    ?>
    
    <form action="#" method="post">

    <p>
        <label for="letra">Letra/Palabra</label>
        <input type="text" name="letra" autofocus>
        <input type="hidden" name="misterio" value="<?php echo $misterio ?>">
        <input type="hidden" name="oportunidad" value="<?php echo $oportunidad ?>">
        <input type="hidden" name="respuesta" value="<?php echo $respuesta ?>">
    </p>
    <p>
        <input type="submit" value="Enviar">
    </p>
    </form>

</body>
</html>