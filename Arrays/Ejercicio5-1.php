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
    
        //Creamos los 3 arrays que vamos a usar y les asignamos 20 espacios
        $num = new SplFixedArray(20);
        $cuadrado = new SplFixedArray(20);
        $cubo = new SplFixedArray(20);

        //Creamos la tabla con las cabeceras del número, el cuadrado y el cubo
        echo '<table> <tr><td>Número</td><td>Cuadrado</td><td>Cubo</td></tr>';


        for ($i = 0; $i < count($num); $i++) {
            
            echo '<tr><td>';

                //Aquí generamos los números
                $num[$i] = rand(0, 100);

            echo $num[$i] , '</td><td>';

                //Aquí los elevamos al cuadrado
                $cuadrado[$i] = pow($num[$i], 2);

            echo $cuadrado[$i] , '</td><td>';

                //Aquí los elevamos al cubo
                $cubo[$i] = pow($num[$i], 3);

            echo $cubo[$i] , '</td></tr>';

        }

        echo '</table>';
    
    ?>

</body>
</html>