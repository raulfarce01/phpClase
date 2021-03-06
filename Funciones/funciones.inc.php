<?php

/*1. esCapicua: Devuelve verdadero si el número que se pasa como parámetro es capicúa y falso
en caso contrario.*/

function esCapicua($num){

    $capicuo = true;

    if($num >= 0 && $num < 10){

        return true;

    }else if($num >= 10 && $num < 100){

        if((int)($num/10) != $num%10){

            $capicuo = false;

        }

    }else if($num >= 100 && $num < 1000){

        //echo (int) $num/100 , "<br>";
        //echo $num%10 , '<br>';

        if((int)($num/100) != $num%10){

            $capicuo = false;

        }

    }else if($num >= 1000 && $num < 10000){

        //echo (int)($num/100), '<br>';
        //echo $num%100, '<br>';

        if((int)($num/1000) != $num%10){

            $capicuo = false;

        }else{
            $num1 = (int)($num/100);
            //echo $num1%10;

            $num2 = $num%100;
            //echo '<br>', (int)($num2/10);

            if($num1%10 != (int)($num2/10)){

                $capicuo = false;

            }

        }

    }else if($num >= 10000 && $num < 100000){

        if((int)($num/10000) != $num%10){

            $capicuo = false;

        }else{

            $num1 = (int)($num/1000);
            $num2 = $num%100;

            //echo $num1%10 , ', ' , (int)($num2/10);

            if($num1%10 != (int)($num2/10)){

                $capicuo = false;

            }

        }

    }
    return $capicuo;
}

/*2. esPrimo: Devuelve verdadero si el número que se pasa como parámetro es primo y falso en
caso contrario.*/

function esPrimo($num){

    $esPrimo = true;

    for($i = 2; $i < $num; $i++){

        if($num%$i == 0){
            $esPrimo = false;
        }

    }

    return $esPrimo;

}

/*3. siguientePrimo: Devuelve el menor primo que es mayor al número que se pasa como
parámetro.*/

function siguientePrimo($num){

    $esPrimo = true;

    do{

        $num++;
        $esPrimo = true;

        for($i = 2; $i <= $num/2; $i++){

            if($num%$i == 0){
                $esPrimo = false;
            }

        }

        

    }while(!$esPrimo);

    return $num;

}

/*4. potencia: Dada una base y un exponente devuelve la potencia.*/

function potencia($base, $exp){

    $total = 1;

    for($i = 0; $i < $exp; $i++){

        $total *= $base;

    }

    return $total;
}

/*5. digitos: Cuenta el número de dígitos de un número entero.*/

function digitos($num){

    $digitos = 1;
    //echo $num;

    while($num >= 10){

        $num /= 10;
        $digitos++;

    }

    return $digitos;

}

/*6. voltea: Le da la vuelta a un número.*/

function voltea($num){

    $numFinal = "";
    $acum = 10;

    while($num >= 1){

        $numFinal .= $num%$acum;
        $num = (int)($num/10);

        //echo $num . ' ' . $acum . ' ' . $numFinal . '<br>';

    }

    return (int)$numFinal;

}

/*7. digitoN: Devuelve el dígito que está en la posición n de un número entero. Se empieza
contando por el 0 y de izquierda a derecha.*/

function digitoN($num, $ocur){

    $cuenta = 1;
    $encuentra = 0;

    while($num >= 10){

        $num /= 10;
        $cuenta++;

    }

    while($cuenta >= 1){

        if((int)$num%10 == $ocur){

            $encuentra = $cuenta;

        }

        $num *= 10;
        $cuenta--;

    }

    return ++$encuentra;

}

/*8. posicionDeDigito: Da la posición de la primera ocurrencia de un dígito dentro de un número
entero. Si no se encuentra, devuelve -1.*/

function posicionDeDigito(){

    $cuenta = 1;
    $encuentra = 0;

    while($num >= 10){

        $num /= 10;
        $cuenta++;

    }

    while($cuenta >= 1){

        if((int)$num%10 == $ocur){

            $encuentra = $cuenta;

        }

        $num *= 10;
        $cuenta--;

    }

    if($encuentra == 0){
        $encuentra = -2;
    }

    return ++$encuentra;

}

/*9. quitaPorDetras: Le quita a un número n dígitos por detrás (por la derecha).*/

function quitaPorDetras($num, $corta){

    for($i = 0; $i < $corta; $i++){

        $num = $num/10;

    }

    return (int)$num;

}

/*10. quitaPorDelante: Le quita a un número n dígitos por delante (por la izquierda).*/

function quitaPorDelante($num, $corta){

    $cifras = 0;
    $aux = $num;

    for($i = 1; $i < $aux; $i*=10){

        $aux /= 10;
        $cifras++;

    }

    $ifras -= $corta;

    return (int)($num%(pow(10, $cifras)));

}

/*11. pegaPorDetras: Añade un dígito a un número por detrás.*/

function pegaPorDetras($num, $pega){

    $num .= $pega;

    return (int)$num;

}

/*12. pegaPorDelante: Añade un dígito a un número por delante.*/

function pegaPorDelante($num, $pega){

    $pega .= $num;

    return (int)$pega;

}

/*13. trozoDeNumero: Toma como parámetros las posiciones inicial y final dentro de un número
y devuelve el trozo correspondiente.*/

function trozoDeNumero($num, $ini, $fin){

    $num = (string)$num;

    $num = substr($num, $ini, ($fin-$ini));

    return (int)$num;

}

/*14. juntaNumeros: Pega dos números para formar uno.*/

function juntaNumeros($num, $pega){

    $num .= $pega;

    return (int)$num;

}

/*1. generaArrayInt: Genera un array de tamaño n con números aleatorios cuyo intervalo
(mínimo y máximo) se indica como parámetro.*/

function generaArrayInt($size, $min, $max){

    $array = [];

    for($i = 0; $i < $size; $i++){

        $array[$i] = rand($min, $max);

    }

    return $array;

}

/*2. minimoArrayInt: Devuelve el mínimo del array que se pasa como parámetro.*/

function minimoArrayInt($array){

    $min = PHP_INT_MAX;

    foreach($array as $valor){

        if($valor < $min){

            $min = $valor;

        }

    }

    return $min;

}

/*3. maximoArrayInt: Devuelve el máximo del array que se pasa como parámetro.*/

function maximoArrayInt($array){

    $max = PHP_INT_MIN;

    foreach($array as $valor){

        if($valor > $max){

            $max = $valor;

        }

    }

    return $max;

}

/*4. mediaArrayInt: Devuelve la media del array que se pasa como parámetro.*/

function mediaArrayInt($array){

    $media = 0;
    $cuenta = 0;

    foreach($array as $valor){

        $media += $valor;
        $cuenta++;

    }

    $media/=$cuenta;

    return $media;

}

/*5. estaEnArrayInt: Dice si un número está o no dentro de un array.*/

function estaEnArrayInt($array, $num){

    $encuentra = false;

    foreach($array as $valor){

        if($valor == $num){

            $encuentra = true;

        }

    }

    return $encuentra;

}

/*6. posicionEnArray: Busca un número en un array y devuelve la posición (el índice) en la que
se encuentra.*/

function posicionEnArray($array, $num){

    $pos = -1;

    for($i = 0; $i < count($array); $i++){

        if($array[$i] == $num){

            $pos = $i;

        }
    }

    if($pos == -1){

        $pos = "No encontrado <br>";

    }

    return $pos;
}

/*7. volteaArrayInt: Le da la vuelta a un array.*/

function volteaArrayInt($array){

    $arrayVuelta = [];
    $pos = 0;

    for($i = count($array) - 1; $i > -1; $i--){

        $arrayVuelta[$pos] = $array[$i];

        $pos++;

    }

    return $arrayVuelta;

}

/*8. rotaDerechaArrayInt: Rota n posiciones a la derecha los números de un array.*/

function rotaDerechaArrayInt($array, $pos){

    $arrayRotado = [];
    $posIni = 0;
    
    for($i = 0; $i < count($array); $i++){

        if($pos >= count($array)){

            $arrayRotado[$posIni] = $array[$i];
            $posIni++;

        }else{

            $arrayRotado[$pos] = $array[$i];
            $pos++;

        }

    }

    return $arrayRotado;

}

/*9. rotaIzquierdaArrayInt: Rota n posiciones a la izquierda los números de un array.*/

function rotaIzquierdaArrayInt($array, $pos){

    $arrayRotado = [];
    $posIni = count($array) - 1;
    $cuenta = 0;
    
    for($i = 0; $i < count($array); $i++){

        if($i + $pos >= count($array)){

            $arrayRotado[$i] = $array[$cuenta];
            $cuenta++;

        }else{

            $arrayRotado[$i] = $array[$i + $pos];

        }

    }

    return $arrayRotado;

}
?>