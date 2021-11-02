<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci y Potencia</title>
</head>
<body>
    
    <?php 
    
        $num = $_POST['num'];
        $aux1 = 1;
        $aux2 = 0;
        $res = 0;

        if(!isset($num)){
            echo 'Inserta un número';
        }else{

            echo 'La serie es: 0, 1, ';

            //Restamos 2 en la segunda posición del bucle puesto que el 0 y el 1 ya los hemos añadido anteriormente.

            for($i = 0; $i < $num - 2; $i++){

                $res = $aux1 + $aux2;
                $aux2 = $aux1;
                $aux1 = $res;

                echo $res , ', ';

            }

            echo '<br> Las potencias hasta ', $num, ' son: ';

            for($i = 0; $i < $num; $i++){

                echo '2^', $i, ', ';

            }

        }
    
    ?>

    <form action="#" method="post">

        Número: <input type="number" name="num"><br>
        <input type="submit" value="Enviar">

    </form>

</body>
</html>