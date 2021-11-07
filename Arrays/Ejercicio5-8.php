<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primos</title>
</head>
<body>

    <?php 

        $num = $_POST['num'];
        $countNum = $_POST['countNum'];
        $auxNum = $_POST['auxNum'];
    
        if(!isset($num)){
            //
            //IMPORTANTE
            //ESTE EJERCICIO NO FURULA
            //
            $num = new SplFixedArray(10);
            $numOrdena = new SplFixedArray(10);
            $primo = true;
            $auxNum = "";
            //$countNum = 0;

        }else{

            $posFin = 10;
            $pos = 0;
            $primo = true;

            if($countNum == 10){

                $auxNum .= "," . $num;
                $auxNum = substr($auxNum, 3);
                $num = explode(",", $auxNum);

                echo '<table border="1px solid black"><tr>';
                foreach($num as $valor){

                    echo '<td>' . $valor . '</td>';

                }
                echo '</tr><tr>';

                for ($i = 0; $i < count($num); $i++){

                    for($j = 2; $j < $num[$i]; $j++){

                        if($num[$i]%$j == 0){

                            //echo $num[$i] , "%" , $j , "=" , $num[$i]%$j , "<br>";

                            $primo = false;

                            //echo 'Entra Primo false '. $num[$i] . '<br>';

                        }

                    }

                    if($primo){

                        //echo 'pos: ' . $pos;

                        //echo $num[$i] , " ifPrimo <br>";

                        $numOrdena[$pos] = $num[$i];


                        $pos++;

                    }else{

                        //echo $num[$i] , " elsePrimo <br>";

                        //echo 'posFin: ' . $posFin;

                        $numOrdena[$posFin] = $num[$i];
                        $posFin--;

                        $primo = true;

                    }

                    //echo $primo . ":" . $num[$i];

                }

                foreach($numOrdena as $valor){

                    echo '<td> ' . $valor . '</td>';

                }
                echo '</tr></table>';

            }
        }
            
            if(($countNum < 10) || !isset($auxNum)){

                ?>

                    <form action="#" method="post">

                        <p>
                            IMPORTANTE<br>
                            ESTE EJERCICIO NO FURULA<br>
                        </p>
                        Inserta valores: <input type="number" name="num" autofocus>
                        <input type="hidden" name="auxNum" value="<?php echo $auxNum . "," . $num; ?>">
                        <input type="hidden" name="countNum" value="<?php echo ++$countNum; ?>"><br>

                        <input type="submit" value="Enviar">

                    </form>

                <?php
    
    
                echo $countNum;
    
            }

    ?>

</body>
</html>