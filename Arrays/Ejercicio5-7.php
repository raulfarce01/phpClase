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
        $auxNum = $_POST['auxNum'];

        if(!isset($auxNum)){

            //Generamos los 20 números aleatorios entre 0 y 100
            for($i = 0; $i < 20; $i++){

                $num[$i] = rand(0, 100);
                echo $num[$i] . " ";

            }

            //
            //Los asignamos a una cadena para después convertirlo en array para no perder los datos
            //al recargar la página
            //
            $auxNum = implode(",", $num);

        }else{

            $num = explode(",", $auxNum);

            //
            //Creamos estas variables para almacenar los valores pares en un array y los impares en otro
            //
            $cuenta = 0;
            $cuentaImpar = 0;
     
             for($i = 0; $i < 20; $i++){
     
                //
                //Comprobamos que sean pares o impares los valores del array
                //
                if($num[$i]%2 == 0){
                    
                    $numPares[$cuenta] = $num[$i];

                    $cuenta++;

                }else{

                    $numImpares[$cuentaImpar] = $num[$i];

                    $cuentaImpar++;

                }
            }

            //
            //Mostramos primero los pares
            //
            foreach($numPares as $valor){

                echo $valor . ' ';

            }

            //
            //Después mostramos los impares
            //
            foreach($numImpares as $valor){

                echo $valor . ' ';

            }

        }
    ?>

    <form action="#" method="post">

        <input type="hidden" name="auxNum" value="<?php echo $auxNum; ?>">
        <input type="submit" value="Enviar">

    </form>

</body>
</html>