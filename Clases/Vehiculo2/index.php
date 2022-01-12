<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehiculo0.5</title>
</head>
<body>
    
    <?php

        require_once 'Vehiculo.php';
        require_once 'Bicicleta.php';
        require_once 'Coche.php';

        $coche = new Coche(80);
        $bici = new Bicicleta(20);

        $coche->anda();
        echo '<br>';
        $coche->quema();
        echo '<br>';


        $bici->anda();
        echo '<br>';
        $bici->caballito();
        echo '<br>';

        echo '<br>';
        echo $coche->getKmTot();
        echo '<br>';


    ?>
</body>
</html>