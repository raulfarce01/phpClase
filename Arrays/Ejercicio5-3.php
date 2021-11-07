<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mueve Array</title>
</head>
<body>

    <?php 
    
        $num = $_POST['num'];
        $countNum = $_POST['countNum'];
        $auxNum = $_POST['auxNum'];
        

        if(!isset($num)){

            echo 'Introduce números';
            $countNum = 0;
            $auxNum = "";
            //Este es el array que ordenaremos
            $nuevoNum = new SplFixedArray(15);

        }else{
            
            if($countNum == 15){

                //commit

                //
                //Estas 3 líneas de código servirán para poder almacenar el array correctamente
                //
                $auxNum .= "," . $num;
                $auxNum = substr($auxNum, 2);
                $num = explode(",", $auxNum);

                //
                //Primero hacemos lo más sencillo, dar al primer valor del array auxiliar
                //el último del original
                //
                $nuevoNum[0] = $num[14];
        
                //
                //En este for almacenamos el valor del campo (por ejemplo) 1 del array original
                //al campo 2 del array auxiliar
                //
                for($i = 0; $i < count($num) - 1; $i++){

                    $nuevoNum[$i+1] = $num[$i];


                }

                //Mostramos el array final
                foreach($nuevoNum as $valor){
        
                    echo $valor . '<br>';
        
                }
            }
        }

        
        
    if (($countNum < 15) || (!isset($num))){
    ?>
    
    <form action="#" method="post">

        <label for="num">Número:</label>
        <input type="number" name="num" autofocus><br>
        <input type="hidden" name="countNum" value="<?php echo ++$countNum; ?>">
        <input type="hidden" name="auxNum" value="<?php echo $auxNum . "," . $num; ?>">

        <input type="submit" value="Enviar">

    </form>
    <?php

        //echo $auxNum;

    }

    ?>

</body>
</html>