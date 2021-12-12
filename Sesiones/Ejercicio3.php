<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones 3</title>
    <link rel="stylesheet" href="./estilos.css">
</head>
<body>
    
    <?php

        error_reporting(E_ALL);
        ini_set('display_errors', '1');

        /*Escribe un programa que permita ir introduciendo una serie indeterminada de números mientras
        su suma no supere el valor 10000. Cuando esto último ocurra, se debe mostrar el total acumulado,
        el contador de los números introducidos y la media. Utiliza sesiones.*/

        //Iniciamos la sesión en caso de que no lo esté
        if(session_id() == ""){
            session_start();
        }

        //Mostramos el formulario inicial e inicializamos las variables que utilizaremos
        if(!isset($_SESSION['total']) || !isset($_SESSION['cuenta']) || !isset($_SESSION['media'])){

            echo '<h2>Inserta un número</h2>
            
            <form action="#" method="post">
            
                <p>
                    <label for="num">Número</label>
                    <input type="number" name="num" autofocus>
                </p>
                <p>
                    <input type="submit" name="enviar" value="Enviar">
                </p>

            </form>';

            $_SESSION['total'] = 0;
            $_SESSION['cuenta'] = 0;
            $_SESSION['media'] = 0;
            $num = 0;

        }else{

            //Comprobamos que el número no sea mayor que 10000 como pide el ejerccio
            if($_SESSION['total'] > 10000){

                //Mostramos los resultados y destruimos la sesión
                echo '<p> El total de los números insertados es: ' . $_SESSION['total'] . '</p>';
                echo '<p> La cantidad de números insertados es: ' . $_SESSION['cuenta'] . '</p>';

                $_SESSION['media'] = $_SESSION['total'] / $_SESSION['cuenta'];

                echo '<p> La media es: ' . $_SESSION['media'] . '</p>';

                unset($_SESSION['media']);
                unset($_SESSION['cuenta']);
                unset($_SESSION['total']);

                session_destroy();

            }else{

                //En caso de no haber llegado al objetivo, seguimos insertando valores
                $num = $_POST['num'];
                $_SESSION['total'] += $num;
                $_SESSION['cuenta']++;

                echo '<p>' . $_SESSION['total'] . '</p>';
                echo '<p>' . $_SESSION['cuenta'] . '</p>';


                echo '
            
                <form action="#" method="post">
            
                    <p>
                        <label for="num">Número</label>
                        <input type="number" name="num" autofocus>
                    </p>
                    <p>
                        <input type="submit" name="enviar" value="Enviar">
                    </p>

                </form>';

            }

        }

    ?>

</body>
</html>