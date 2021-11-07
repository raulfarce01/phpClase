<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fivonacci</title>
</head>
<body>
    
    <?php
    
    $num = $_POST['num'];
    $aux1 = 0;
    $aux2 = 1;
    $res = 0;

    if(!isset($num)){
        echo 'Introduce un número';
    }else{

        echo $aux1 , '<br>', $aux2, '<br>';
        
        while($res < $num){

            $res = $aux1 + $aux2;

            echo $res , '<br>';

            $aux1 = $aux2;
            $aux2 = $res;
        }

    }

    ?>

    <form action="#" method="post">

        Número: <input type="number" name="num">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>