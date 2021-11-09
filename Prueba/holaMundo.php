<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>
<body>
    
    <?php

        include_once 'funcionFecha.inc.php';

        echo '<table>';

        foreach($_SERVER as $valor1 => $valor2){

            echo '<tr><td>' . $valor1 . '</td><td>' . $valor2 . '</td></tr>';

        }

        echo '</table>';

        ?>
</body>
</html>