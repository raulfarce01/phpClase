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

    if(!isset($oportunidades)){
        $oportunidades = 4;
    }else{
        if(isset($num)){

            if($oportunidades > 0){

                if($num == $deseado){

                    echo 'Has acertado, a mimir crack';

                }else{

                    echo 'Has fallado payaso';
                    $oportunidades--;
                    echo 'Te quedan' , $oportunidades , ' oportunidades';

                }

            }else{

                echo 'Te has quedado sin oportunidades';
                
            }

        }
    }

    /*$num = $_POST['num'];
    $deseado = $_POST['deseado'];

    if(isset($num)){
        if(!isset($oportunidades)){
            $oportunidades = 4;
        }
            if($oportunidades < 4){
                if($num == $deseado){
                    echo('Enhorabuena fiera, has encontrado el número, enga a dormir');
                }else{
                    $oportunidades--;
                    echo('Has fallado payaso<br><br>');
                    echo("Te quedan $oportunidades oportunidades<br><br>");
                }
            }else{
                echo ('Te has quedado sin oportunidades <br><br>');
            }
    }else{
        echo 'No has introducido ningún dato <br><br>';
    }*/

    ?>
    
    <!--Te quedan <-?php $oportunidades-- ?> oportunidades <br><br> -->
    Introduce un número de 4 cifras.<br>

    <form action="index.php" method="post">
    
        Número: <input type="number" name="num"><br><br>
        <input type="hidden" name="deseado" value="5810">

        <input type="submit" value="Enviar">

    </form>

</body>
</html>