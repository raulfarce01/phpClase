<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprueba Traducción</title>
</head>
<body>
    
    <?php 

        $countNum = $_POST['countNum'];
        $palabra = $_POST['palabra'];
        //$auxPalabra = $_POST['auxPalabra'];
    
        $diccionario = array("Perro" => "Dog", "Gato" => "Cat", "Pájaro" => "Bird", "Ensalada" => "Shlada", 
        "Juego" => "Game", "Ordenador" => "Computer", "Televisión" => "TV", "Tarjeta" => "Card", 
        "Niño" => "Kid", "Chico" => "Boy", "Chica" => "Girl", "Vecino" => "Neightbour", "Cuerpo" => "Body", 
        "Mesa" => "Table", "Silla" => "Chair");

            if(!isset($palabra)){
            for($i = 0; $i < count($diccionario); $i++){

                foreach($diccionario as $español => $ingles){

                    $diccionarioEspañol[] = $español;

                }

            }
        }else{
    
        if($countNum < 5){

            $pregunta = $diccionarioEspañol[rand(0, 15)];

            if(strtolower($pregunta) == strtolower($palabra)){

                echo 'Has acertado <br>';

            }else{

                echo 'Has fallado';

            }
        }
        }

    ?>

        <form action="#" method="post">
            
            <p>
                IMPORTANTE<br>
                ESTE EJERCICIO TAMPOCO FUNCIONA<br>
            </p>
            <p>
                Escribe la traducción de <?php $pregunta ?><br>
            </p>
            Traducción: <input type="text" name="palabra"><br>
            <input type="hidden" name="countNum" value="<?php echo ++$countNum ?>">
            <input type="submit" value="Enviar">
        
        </form>

        <?php

           
        ?>

</body>
</html>