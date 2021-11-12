<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprueba y Muestra Fecha</title>
</head>
<body>
    
    <?php

        if(!empty($_POST['dia']) && !empty($_POST['mes']) && !empty($_POST['ano'])){

            $dia = $_POST['dia'];
            $mes = $_POST['mes'];
            $ano = $_POST['ano'];

            //echo $dia . ' ' . $mes . ' ' . $ano . '<br>';

            if(strtolower($mes) == 'enero' || $mes == "1"){

                if($dia > 31){

                    echo 'Día incorrecto ';

                }else{

                    echo $dia . ' ';

                }

                echo 'de Enero de ';

            }else if(strtolower($mes) == 'febrero' || $mes == "2"){

                if($ano%4 == 0){

                    if($dia > 29){

                        echo 'Día incorrecto ';

                    }else{

                        echo $dia . ' ';
    
                    }
                    
                }else{

                    if($dia > 28){

                        echo 'Día incorrecto';

                    }else{

                        echo $dia . ' ';
    
                    }

                }

                echo 'de Febrero de ';

            }else if(strtolower($mes) == 'marzo' || $mes == "3"){

                if($dia > 31){

                    echo 'Día incorrecto ';

                }else{

                    echo $dia . ' ';

                }

                echo 'de Marzo de ';

            }else if(strtolower($mes) == 'abril' || $mes == "4"){

                if($dia > 31){

                    echo 'Día incorrecto ';

                }else{

                    echo $dia . ' ';

                }

                echo 'de Abril de ';


            }else if(strtolower($mes) == 'mayo' || $mes == "5"){

                if($dia > 31){

                    echo 'Día incorrecto ';

                }else{

                    echo $dia . ' ';

                }

                echo 'de Mayo de ';

            }else if(strtolower($mes) == 'junio' || $mes == "6"){

                echo 'de Junio de ';

                if($dia > 31){

                    echo 'Día incorrecto ';

                }else{

                    echo $dia . ' ';

                }

            }else if(strtolower($mes) == 'julio' || $mes == "7"){

                if($dia > 31){

                    echo 'Día incorrecto ';

                }else{

                    echo $dia . ' ';

                }

                echo 'de Julio de ';

            }else if(strtolower($mes) == 'agosto' || $mes == "8"){

                if($dia > 31){

                    echo 'Día incorrecto ';

                }else{

                    echo $dia . ' ';

                }

                echo 'de Agosto de ';

            }else if(strtolower($mes) == 'septiembre' || $mes == "9"){

                if($dia > 31){

                    echo 'Día incorrecto ';

                }else{

                    echo $dia . ' ';

                }

                echo 'de Septiembre de ';


            }else if(strtolower($mes) == 'octubre' || $mes == "10"){

                if($dia > 31){

                    echo 'Día incorrecto ';

                }else{

                    echo $dia . ' ';

                }

                echo 'de Octubre de ';

            }else if(strtolower($mes) == 'noviembre' || $mes == "11"){

                if($dia > 31){

                    echo 'Día incorrecto ';

                }else{

                    echo $dia . ' ';

                }

                echo 'de Noviembre de ';

            }else if(strtolower($mes) == 'diciembre' || $mes == "12"){

                if($dia > 31){

                    echo 'Día incorrecto ';

                }else{

                    echo $dia . ' ';

                }

                echo 'de Diciembre de ';

            }else{

                echo 'Mes incorrecto';

            }

            echo $ano;

        }

    ?>

    <form name="envio" action="#" method="post">

        <p>
    
        Día del mes: <input type="number" name="dia">

        <?php

            if(isset($_POST['enviar']) && empty($_POST['dia'])){

                echo '<span style="color: red;"> &lt;-- Debe introducir un día!!</span>';

            }

        ?>
        </p>
        <p>

        Mes: <input type="text" name="mes">

        <?php

            if(isset($_POST['enviar']) && empty($_POST['mes'])){

                echo '<span style="color: red;"> &lt;-- Debe introducir un mes!!</span>';

            }

        ?>
        </p>

        <p>
        Año: <input type="number" name="ano">

        <?php

            if(isset($_POST['enviar']) && empty($_POST['ano'])){

                echo '<span style="color: red;"> &lt;-- Debe introducir un ano!!</span>';

            }

        ?>
        </p>

        <input type="submit" value="Enviar" name="enviar">

    </form>

</body>
</html>