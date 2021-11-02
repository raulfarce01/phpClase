<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero Capicuo</title>
</head>
<body>
    
    <?php  
        
        $num = $_POST['num'];
        $capicuo = true;

        if(!isset($num)){

            echo 'Inserta un número de máximo 5 cifras <br>';
            
        }else{

            if($num >= 0 && $num < 10){

                echo 'El número introducido es capicúo';

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

                    echo $num1%10 , ', ' , (int)($num2/10);

                    if($num1%10 != (int)($num2/10)){

                        $capicuo = false;

                    }

                }

            }

            if($capicuo){

                echo 'El número introducido es capicúo';
    
            }else{
    
                echo 'El número introducido no es capicúo';
                
            }
        }

        
        
    ?>

    <form action="#" method="post">

        Introduce un número: <input type="number" name="num" autofocus><br>
        <input type="submit" value="Enviar">

    </form>
</body>
</html>