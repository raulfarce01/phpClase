<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pares Primero</title>
</head>
<body>
    
    <?php

        $num = new SplFixedArray(20);
        $auxNum = new SplFixedArray(20);

        foreach($num as $valor){

            $valor = rand(0, 100);

            echo $valor . ", ";

        }

        echo '<br>';

        for($i = 0; $i < count($num); $i++){

            for($j = count($num); $j > 0; $j--){

                if($num[$i]%2 == 0){

                    $auxNum[$i] = $num[$i];
    
                    //echo 'Entraif1 ';
    
                }

                if($num[$i]%2 != 0){

                    $auxNum[$j] = $num[$i];

                    //echo 'Entra if2 ';

                }

            }

        }

        foreach($auxNum as $valor){

            echo $valor . ", ";

        }

    ?>

</body>
</html>