<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max y Min</title>
</head>
<body>

    <?php 
    
        $num = $_POST['num'];
        $countNum = $_POST['countNum'];
        $auxNum = $_POST['auxNum'];
        

        if(!isset($num)){

            echo 'Introduce números';
            $countNum = 0;
            $auxNum = "";
            $max = 0;
            $min = 0;

        }

        if($countNum == 10){

            $auxNum = $auxNum . " " . $num;
            $auxNum = substr($auxNum, 2);
            $num = explode(" ", $auxNum);

            foreach ($num as $valor){

                if($valor < $min){

                    $min = $valor;

                }else if ($valor > $max){

                    $max = $valor;

                }
            }

            foreach ($auxNum as $valor){

                if($valor == $min){

                    echo 'Mínimo =>' . $valor . '<br>';

                }else if($valor == $max){

                    echo 'Máximo =>' . $valor . '<br>';

                }else{

                    echo $valor . '<br>';

                }

            }

        }
        
    if (($countNum < 10) || (!isset($num))){
    ?>
    
    <form action="#" method="post">

        <label for="num">Número:</label>
        <input type="number" name="num" autofocus><br>
        <input type="hidden" name="countNum" value="<?php ++$countNum ?>">
        <input type="hidden" name="auxNum" value="<?php $auxNum . " " . $num ?>">

        <input type="submit" value="Enviar">

    </form>
    <?php

    }

    ?>

</body>
</html>