<?php

/** Vamos a ampliar uno de los ejercicios de la relación anterior para considerar las horas extras. Escribe
un programa que calcule el salario semanal de un trabajador teniendo en cuenta que las horas
ordinarias (40 primeras horas de trabajo) se pagan a 12 euros la hora. A partir de la hora 41, se
pagan a 16 euros la hora. */

    $horas = $_POST['horas'];
    $extras = 0;

    if($horas <= 40){

        $horas *= 12;

        echo $horas;

    }else{

        //echo $horas , '<br>';

        $extras = $horas - 40;
        $horas -= $extras;

        $extras *= 16;

        //echo $extras , '<br>';
        //echo $horas , '<br>';

        $horas *= 12;
        //echo $horas , '<br>';
        $horas += $extras;

        echo $horas;

    }

?>