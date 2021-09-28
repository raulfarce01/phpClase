<?php

    /**Realiza un programa que resuelva una ecuación de segundo grado (del tipo ax2 + bx + c = 0). */

    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $x1 = 0;
    $x2 = 0;

    $x1 = (-($b) + sqrt(pow($b, 2) - 4 * $a * $c))/(2 * $a);
    $x2 = (-($b) - sqrt(pow($b, 2) - 4 * $a * $c))/(2 * $a);

    echo 'Resultado x1: ' , $x1 , '<br>';
    echo 'Resultado x2: ' , $x2;
?>