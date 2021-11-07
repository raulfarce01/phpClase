<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo</title>
</head>
<body>
    
    <?php

        $num = $_POST['num'];

        if($num < 10){
            echo $num;
        }else if($num >= 10 && $num < 100){
            echo round($num /= 10 , 0, $PHP_ROUND_HALF_ODD);
            //echo 'El primer valor del número introducido es: &nbsp;' , substr($num, 0, 1);
            //echo $num;
        }else if($num >= 100 && $num < 1000){
            echo round($num /= 100 , 0, $PHP_ROUND_HALF_ODD);
            //echo 'El primer valor del número introducido es: &nbsp;' , substr($num, 0, 1);
            //echo $num;
        }else if($num >= 1000 && $num < 10000){
            echo round($num /= 1000 , 0, $PHP_ROUND_HALF_ODD);
            //echo 'El primer valor del número introducido es: &nbsp;' , substr($num, 0, 1);
           // echo $num;
        }else if($num >= 10000 && $num < 100000){
            echo round($num /= 10000 , 0, $PHP_ROUND_HALF_ODD);
            //echo 'El primer valor del número introducido es: &nbsp;' , substr($num, 0, 1);
            //echo $num;
        }else{
            echo 'Valor Incorrecto';
        }

    ?>

</body>
</html>