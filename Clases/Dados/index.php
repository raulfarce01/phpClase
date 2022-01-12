<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dado Poker</title>
</head>
<body>
    
    <?php

        error_reporting(E_ALL);
        ini_set('display_errors', '1');

        require_once 'DadoPoker.php';

        $cubo1 = new DadoPoker(1);
        $cubo2 = new DadoPoker(2);
        $cubo3 = new DadoPoker(3);
        $cubo4 = new DadoPoker(4);
        $cubo5 = new DadoPoker(5);

        $cubo1->tira();
        $cubo2->tira();
        $cubo3->tira();
        $cubo4->tira();
        $cubo5->tira();

        echo 'Dado1 <br>';
        $cubo1->muestraResultado();
        echo '<br>';

        echo 'Dado2 <br>';
        $cubo2->muestraResultado();
        echo '<br>';

        echo 'Dado3 <br>';
        $cubo3->muestraResultado();
        echo '<br>';

        echo 'Dado4 <br>';
        $cubo4->muestraResultado();
        echo '<br>';

        echo 'Dado5 <br>';
        $cubo5->muestraResultado();
        echo '<br>';

        echo $cubo1->getTiradasTotales();


    ?>
</body>
</html>