<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>
<body>
    
    <?php

        //
        //En esta parte se encarga de comprobar que no estén vacíos los valores del nombre y de los módulos
        //Y si ha recibido algún valor lo asigna a la variable
        //
        if (!empty($_POST['modulos']) && !empty($_POST['nombre'])){
            $nombre = $_POST['nombre'];
            $modulos = $_POST['modulos'];

            //
            //Aquí muestra el valor del nombre
            //
            print "Nombre: " . $nombre . "<br>";

            //
            //En este foreach se encarga de recorrer el array de módulos para mostrarlo por pantalla
            //
            foreach($modulos as $modulo){

                print "Módulo: " . $modulo . "<br>";

            }
        }else{

        ?>

            <form name="input" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            Nombre del alumno: <input type="text" name="nombre">

        <?php

            //
            //En este if comprobamos que no se haya pulsado el botón enviar con el nombre vacío
            //
            if(isset($_POST['enviar']) && empty($_POST['nombre'])){

                echo '<span style="color: red;"> &lt;-- Debe introducir un nombre!!</span>';

            }

        ?>
        <p>
            Módulos que cursa:
        </p>

        <?php

            //
            //Aquí comprobamos que no se pulse el botón enviar sin haber seleccionado al menos un módulo
            //
            if(isset($_POST['enviar']) && empty($_POST['modulos'])){

                echo '<span style="color: red;"> &lt;-- Debe escoger al menos uno!!</span>';

            }

        ?>

        </p>

        <input type="checkbox" name="modulos[]" value="DWES"
        <?php 

            //
            //Se inicializa como seleccionado el valor del array DWES, por eso está dentro del input esta parte
            //del código
            //
            if(isset($_POST['modulos']) && in_array("DWES", $_POST['modulos'])){

                echo 'checked="checked"';

            }

        ?>>
        Desarrollo Web Entorno Servidor<br>

        <input type="checkbox" name="modulos[]" value="DWEC"
        <?php 

            //
            //Se inicializa como seleccionado el valor del array DWEC, por eso está dentro del input esta parte
            //del código
            //
            if(isset($_POST['modulos']) && in_array("DWEC", $_POST['modulos'])){

                echo 'checked="checked"';

            }

        ?>>
        Desarrollo Web Entorno Cliente<br><br>

        <input type="submit" value="Enviar" name="enviar">

        <?php
        

        }

    ?>
</body>
</html>