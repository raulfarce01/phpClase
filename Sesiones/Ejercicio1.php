<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Sesiones</title>
    <link rel="stylesheet" href="./estilos.css">
</head>
<body>
    
    <?php

    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    

        /*Escribe un programa que calcule la media de un conjunto de números positivos introducidos por
        teclado. A priori, el programa no sabe cuántos números se introducirán. El usuario indicará que ha
        terminado de introducir los datos cuando meta un número negativo. Utiliza sesiones.*/

        //Comprobamos que la sesión esté iniciada,
        //en caso de que no lo esté, la iniciamos nosotros
        if(session_id() == ""){
            session_start();

            if(!isset($_SESSION['cant'])){
                $_SESSION['cant'] = 0;
            }
    
            if(!isset($_SESSION['total'])){
                $_SESSION['total'] = 0;
            }
        }

        //Seteamos la variable num
        if(!isset($_POST['num'])){
            $num = 0;
        }else{
            $num = $_POST['num'];

            //Comprobamos que total esté setado, num sea mayor que cero y sea un número
            if(isset($_SESSION['total']) && $num >= 0 && is_numeric($num)){

                $_SESSION['total'] += $num;
                $_SESSION['cant']++;
    
            }

            //Mostramos la media
            if($num == -1){

                echo 'La media es de ' . $_SESSION['total']/$_SESSION['cant'] . '<br>';
    
            }
        }
        
        

    ?>

    <form action="#" method="post">
    
    <p>
        <label for="num">Número</label>
        <input type="number" name="num" autofocus>
        
            <?php
                if(isset($_POST['enviar']) && empty($_POST['num'])){

                    echo '<span style="color:red;">Debes insertar un número</span>';

                }
            ?>
    </p>
        <p>
            <input type="submit" name="enviar" value="Enviar">
            
            <?php

                if(isset($_SESSION['total']) && isset($_SESSION['cant'])){

                    echo '<input type="submit" name="logout" value="Cerrar sesión">';

                    if(isset($_POST['logout'])){

                        session_destroy();

                        if(isset($_SESSION['cant'])){
                            unset($_SESSION['cant']);
                        }

                        if(isset($_SESSION['total'])){
                            unset($_SESSION['total']);
                        }

                    }

                }

            ?>

        </p>

    </form>

</body>
</html>