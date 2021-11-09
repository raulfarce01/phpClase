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

function digitoN(){

}

/*8. posicionDeDigito: Da la posición de la primera ocurrencia de un dígito dentro de un número
entero. Si no se encuentra, devuelve -1.*/

function posicionDeDigito(){

}

/*9. quitaPorDetras: Le quita a un número n dígitos por detrás (por la derecha).*/

function quitaPorDelante(){

}

/*10. quitaPorDelante: Le quita a un número n dígitos por delante (por la izquierda).*/

function quitaPorDetras(){

}

/*11. pegaPorDetras: Añade un dígito a un número por detrás.*/

function pegaPorDetras(){

}

/*12. pegaPorDelante: Añade un dígito a un número por delante.*/

function pegaPorDelante(){

}

/*13. trozoDeNumero: Toma como parámetros las posiciones inicial y final dentro de un número
y devuelve el trozo correspondiente.*/

function trozoDeNumero(){

}

/*14. juntaNumeros: Pega dos números para formar uno.*/

function juntaNumeros(){

}

/*1. generaArrayInt: Genera un array de tamaño n con números aleatorios cuyo intervalo
(mínimo y máximo) se indica como parámetro.*/

function generaArrayInt(){

}

/*2. minimoArrayInt: Devuelve el mínimo del array que se pasa como parámetro.*/

function minimoArrayInt(){

}

/*3. maximoArrayInt: Devuelve el máximo del array que se pasa como parámetro.*/

function maximoArrayInt(){

}

/*4. mediaArrayInt: Devuelve la media del array que se pasa como parámetro.*/

function mediaArrayInt(){

}

/*5. estaEnArrayInt: Dice si un número está o no dentro de un array.*/

function estaEnArrayInt(){

}

/*6. posicionEnArray: Busca un número en un array y devuelve la posición (el índice) en la que
se encuentra.*/

function posicionEnArray(){

}

/*7. volteaArrayInt: Le da la vuelta a un array.*/

function volteaArrayInt(){

}

/*8. rotaDerechaArrayInt: Rota n posiciones a la derecha los números de un array.*/

function rotaDerechaArrayInt(){

}

/*9. rotaIzquierdaArrayInt: Rota n posiciones a la izquierda los números de un array.*/

function rotaIzquierdaArrayInt(){

}
?>