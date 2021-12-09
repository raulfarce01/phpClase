<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones 2</title>
</head>
<body>
    
    <?php

        error_reporting(E_ALL);
        ini_set('display_errors', '1');

        /*Realiza un programa que vaya pidiendo números hasta que se introduzca un numero negativo y
        nos diga cuantos números se han introducido, la media de los impares y el mayor de los pares. El
        número negativo sólo se utiliza para indicar el final de la introducción de datos pero no se incluye
        en el cómputo. Utiliza sesiones.*/

        if(session_id() == ""){
            session_start();
        }

        if(!isset($_SESSION['cuentaImpar']) || !isset($_SESSION['impares']) || !isset($_SESSION['mayorPar'])){

            $_SESSION['impares'] = 0;
            $_SESSION['cuentaImpar'] = 0;
            $_SESSION['mayorPar'] = 0;
            $media = 0;

            echo '

            <h2>Inserta un número</h2>
            
            <form action="#" method="post">
            
                <p>
                    <label for="num">Número</label>
                    <input type="number" name="num" autofocus>
                </p>
                <p>
                    <input type="submit" name="enviar" value="Enviar">
                </p>

            </form>
            
            ';


            if(isset($_POST['enviar']) && empty($_POST['num'])){

                echo '<span style="color: red;">Debes introducir un número</span>';

            } 

        }else{

            $num = $_POST['num'];

            if(isset($num)){

                if($num >= 0){

                    if($num%2 == 0){

                        if($num > $_SESSION['mayorPar']){
    
                            $_SESSION['mayorPar'] = $num;
    
                        }
                        
    
                    }else{
    
                        $_SESSION['impares'] += $num;
                        $_SESSION['cuentaImpar']++;
    
                    }

                }else{

                    echo 'El número mayor de los pares es: ' . $_SESSION['mayorPar'] . '<br>';

                    $media = $_SESSION['impares']/$_SESSION['cuentaImpar'];

                    echo 'La media de los impares es: ' . $media . '<br>';

                    unset($_SESSION['mayorPar']);
                    unset($_SESSION['cuentaImpar']);
                    unset($_SESSION['impares']);

                    session_destroy();
                    
                }

                

            }

            echo '
            
            <form action="#" method="post">
            
                <p>
                    <label for="num">Número</label>
                    <input type="number" name="num" autofocus>
                </p>
                <p>
                    <input type="submit" name="enviar" value="Enviar">
                </p>

            </form>
            
            ';

        }

    ?>

</body>
</html>