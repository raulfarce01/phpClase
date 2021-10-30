<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays Potencias</title>
</head>
<body>
    
    <?php 
    
        $num = new SplFixedArray(20);
        $cuadrado = new SplFixedArray(20);
        $cubo = new SplFixedArray(20);

        echo '<table> <tr><td>Número</td><td>Cuadrado</td><td>Cubo</td></tr>';

        for ($i = 0; $i < count($num); $i++) {
            
            echo '<tr><td>';

                $num[$i] = rand(0, 100);

            echo $num[$i] , '</td><td>';

                $cuadrado[$i] = pow($num[$i], 2);

            echo $cuadrado[$i] , '</td><td>';

                $cubo[$i] = pow($num[$i], 3);

            echo $cubo[$i] , '</td></tr>';

        }

        echo '</table>';
    
    ?>

</body>
</html>