<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pares Primero</title>
</head>
<body>
    
    <?php

        
        $pares = 0;
        $impares = 0;

        if(!isset($auxNum)){

            for($i = 0; $i < 20; $i++){

                $num[$i] = rand(0, 100);
                echo $num[$i] . " ";

            }

            $auxNum = implode(",", $num);

        }else{

            $num = explode(",", $auxNum);

            /*for($i = 0; $i < count($num); $i++){

                if($num[$i]%2 == 0){
                    $pares++;
                }else{
                    $impares++;
                }
     
             }*/

            $cuenta = 0;
            $cuentaAtras = 20;
     
             for($i = 0; $i < 20; $i++){
     
                if($num[$i]%2 == 0){
                    
                    $numPares[$cuenta] = $num[$i];

                    $cuenta++;

                }else{

                    $numImpares[$cuentaAtras] = $num[$i];

                    $cuentaAtras--;

                }
            }

            foreach($numPares as $valor){

                echo $valor . ' ';

            }

            foreach($numImpares as $valor){

                echo $valor . ' ';

            }

        }
    ?>

    <form action="#" method="post">

        <input type="submit" value="Enviar">

    </form>

</body>
</html>