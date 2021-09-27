<?php

    /** Realiza un programa que diga si un número introducido por teclado es par y/o divisible entre 5. */

    $num = $_POST['num'];

    if($num%2 == 0){

        echo $num, ' es par';

    }else if($num%5 == 0){

        echo $num, ' es divisible por 5';

    }else{

        echo $num, ' no es par ni divisible por 5';
    }

?>