<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>

    <?php

    $num = $_POST['num'];
    $deseado = $_POST['deseado'];
    $oportunidades = 4;

    if(isset($num)){
        if($oportunidades > 0){
            if($num == $deseado){
                echo('Enhorabuena fiera, has encontrado el número, enga a dormir');
            }else{
                echo('Has fallado payaso');
            }
            echo('Te quedan ' , $oportunidades , 'oportunidades');
        }else{
            echo ('Te has quedado sin oportunidades');
        }
    }
    ?>
    
    
    Introduce un número de 4 cifras.<br>

    <form action="#" method="post">
    
        Número: <input type="number" name="num"><br><br>
        <input type="hidden" name="deseado" value="5810">

        <input type="submit" value="Enviar">

    </form>

</body>
</html>