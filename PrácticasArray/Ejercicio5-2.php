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

        if($countNum == 9){

            //$auxNum = $auxNum , " " , $num;

            $num = explode(" ", $auxNum);
            foreach ($num as $valor){

                if($valor < $min){

                    $min = $valor;

                }else{

                    $max = $valor;

                }
            }

            $auxNum["Máximo"] = $max;
            $auxNum["Mínimo"] = $min;

            foreach ($auxNum as $valor){

                echo $valor , '<br>';

            }

        }
        
    
    ?>
    
    <form action="#" method="post">

        <label for="num">Número:</label>
        <input type="number" name="num"><br>
        <input type="hidden" name="countNum" value="<?php $countNum++ ?>">
        <input type="hidden" name="auxNum" value="<?= $auxNum , " " , $num ?>">

        <input type="submit" value="Enviar">

    </form>

</body>
</html>