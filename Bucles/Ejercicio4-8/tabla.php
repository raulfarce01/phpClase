<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar Resultado</title>
</head>
<body>

    <table>
    
    <?php

        $num = $_POST['num'];

        for($i = 1; $i < 11; $i++){

            echo '<tr><td>' , $num , ' * ' , $i , '</td><td>' , $num * $i , '</td></tr>';

        }

    ?>

    </table>

</body>
</html>