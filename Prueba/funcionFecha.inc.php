<?php 

    function muestraFecha(){

        $dia = date("D");
        $mes = date("M");

        if(strtolower($dia)== strtolower("mon")){
            echo 'Lunes ';
        }else if(strtolower($dia) == strtolower("tue")){
            echo 'Martes ';
        }else if(strtolower($dia) == strtolower("wed")){
            echo 'Miércoles ';
        }else if(strtolower($dia) == strtolower("thu")){
            echo 'Jueves ';
        }else if(strtolower($dia) == strtolower("fri")){
            echo 'Viernes ';
        }else if(strtolower($dia) == strtolower("sat")){
            echo 'Sábado ';
        }else if(strtolower($dia) == strtolower("sun")){
            echo 'Domingo ';
        }else{
            echo 'Incorrecto día ';
        }

        echo date("d");

        if(strtolower($mes) == strtolower("jan")){
            echo ' de Enero ';
        }else if(strtolower($mes) == strtolower("feb")){
            echo ' de Febrero ';
        }else if(strtolower($mes) == strtolower("mar")){
            echo ' de Marzo ';
        }else if(strtolower($mes) == strtolower("apr")){
            echo ' de Abril ';
        }else if(strtolower($mes) == strtolower("may")){
            echo ' de Mayo ';
        }else if(strtolower($mes) == strtolower("jun")){
            echo ' de Junio ';
        }else if(strtolower($mes) == strtolower("jul")){
            echo ' de Julio ';
        }else if(strtolower($mes) == strtolower("aug")){
            echo ' de Agosto ';
        }else if(strtolower($mes) == strtolower("sep")){
            echo ' de Septiembre ';
        }else if(strtolower($mes) == strtolower("oct")){
            echo ' de Octubre ';
        }else if(strtolower($mes) == strtolower("nov")){
            echo ' de Noviembre ';
        }else if(strtolower($mes) == strtolower("dec")){
            echo ' de Diciembre ';
        }else{
            echo ' Mes Incorrecto ';
        }

        echo 'de ' . date("Y");

    }

?>