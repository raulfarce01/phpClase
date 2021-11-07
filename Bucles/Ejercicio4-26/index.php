<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuentra Dígito</title>
</head>
<body>
    
    <?php 
    
        $num = $_POST['num'];
        $dig = $_POST['dig'];
        $num = (string)$num;
        $dig = (string)$dig;

        for($i = 0; $i <= strlen($num); $i++){
            //echo substr($num, 0, $i) , '<br>';
            for($j = $i; $j <= strlen($num); $j++){
                //echo substr($num, $j, $i), '<br>';
                if(substr($num, $j, $i) == $dig){
                    $pos = $i;
                }
            }
        }

        echo 'La posición del número solicitado es: ' , $pos + 1;

        /*for($i = 0; $i < strlen($num); $i++){
            for($j = $i-1; $j <= $i; $j++){
                echo substr($num, $j, $i), '<br>';
                if(substr($num, $j, $i) == $dig){
                    echo 'La posición del número es: ', $i + 1;
                }
            }
        }*/
    ?>

    <form action="#" method="post">

        Número: <input type="number" name="num" autofocus="autofocus"><br>
        Dígito a buscar: <input type="number" name="dig">

        <input type="submit" value="Enviar">

    </form>

</body>
</html>