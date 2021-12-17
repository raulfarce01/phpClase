<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases</title>
</head>
<body>
    
    <?php

        error_reporting(E_ALL);
        ini_set('display_errors', '1');

        require 'Vehiculo.php';
        require 'CuatroRuedas.php';
        require 'DosRuedas.php';
        require 'Coche.php';
        require 'Camion.php';

        $coche1 = new Coche("Rojo", 89, 4, 3);
        $camion1 = new Camion("Verde", 200, 2, 20);
        $moto1 = new DosRuedas("Rosa", 30, 70);

        /*var_dump($coche1);
        echo '<br>';
        var_dump($camion1);
        echo '<br>';
        var_dump($moto1);*/

        /*$coche1->añadirCadenasNieve(2);
        $coche1->quitarCadenasNieve(4);
        $coche1->repintar("Azul");
        $coche1->circula($coche1);
        $coche1->añadirPersona(60);

        $camion1->añadirRemolque(20);
        $camion1->repintar("Verde");
        $camion1->circula($camion1);
        $camion1->añadirPersona(70);

        $moto1->ponerGasolina(2);
        $moto1->circula($moto1);
        $moto1->añadirPersona(120);*/

        /*
            Ejercicio 2
        */

        echo "<h1>Ejercicio 2</h1>";

        $camion2 = new Camion("Azul", 1500, 2, 20);

        $camion2->circula();
        $camion2->añadirPersona(70);
        echo "<br>";

        /*
            Ejercicio 3
        */

        echo "<h1>Ejercicio 3</h1>";

        $coche2 = new Coche("Verde", 1400, 4, 3);

        $coche2->añadirPersona(65);
        $coche2->añadirPersona(65);

        $coche2->getColor(); echo "<br>";
        $coche2->getPeso(); echo "<br>";

        $coche2->repintar("rojo");

        $coche2->añadirCadenasNieve(2);


        /*
            Ejercicio 4
        */

        echo "<h1>Ejercicio 4</h1>";

        $moto2 = new DosRuedas("Rojo", 150, 1000);

        $moto2->añadirPersona(70);

        $moto2->repintar("Verde");


        /*
            Ejercicio 5
        */
        
        echo "<h1>Ejercicio 5</h1>";

        $coche3 = new Coche("Verde", 2100, 4, 2);

        $coche3->añadirCadenasNieve(2);
        $coche3->añadirPersona(80);
        $coche3->repintar("Azul");
        $coche3->quitarCadenasNieve(4);
        $coche3->repintar("Negro");
        var_dump($coche3);


    ?>

</body>
</html>