<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max y Min</title>
</head>
<body>

    <?php 
    
        $num = $_POST['num'];
        $countNum = $_POST['countNum'];
        $auxNum = $_POST['auxNum'];
        $min = $_POST['min'];
        

        if(!isset($num)){

            echo 'Introduce números';
            $countNum = 0;
            $auxNum = "";
            $max = 0;
            //Ponemos este número como min porque es un número grande, 
            //para así poder calcular los más pequeños
            $min = 190000210;

        }else{
            if($countNum == 10){

                //echo 'if countnum == 10';

                //
                //Aquí creamos el array con los números que hemos asignado
                //
                $auxNum = $auxNum . "," . $num;
                $auxNum = substr($auxNum, 2);
                $num = explode(",", $auxNum);

                //
                //En este foreach nos encargamos de que los números mínimo y máximo se almacenen
                //
                foreach ($num as $valor){

                    //echo $valor . '=>' . $min . ";";
    
                    if ($valor < $min){

                        //echo 'entra';
    
                        $min = $valor;
    
                    }else if ($valor > $max){
    
                        $max = $valor;
    
                    }
                }
    
                //
                //En este foreach nos encargamos de mostrar los enunciados mínimo y máximo en sus valores
                //correspondientes una vez aparezcan en el array
                //
                foreach ($num as $valor){

                    //echo $min . ' ';
                    
                    if($valor == $min){
    
                        echo 'Mínimo => ' . $valor . '<br>';
    
                    }else if($valor == $max){
    
                        echo 'Máximo => ' . $valor . '<br>';
    
                    }else{
    
                        echo $valor . '<br>';
    
                    }

                }

            }
        }

        
    //
    //Con este if nos encargamos de que se sigan almacenando números hasta que el array llegue a 10
    //
    if (($countNum < 10) || (!isset($num))){
    ?>
    
    <form action="#" method="post">

        <label for="num">Número:</label>
        <input type="number" name="num" autofocus><br>
        <input type="hidden" name="countNum" value="<?php echo ++$countNum; ?>">
        <input type="hidden" name="auxNum" value="<?php echo $auxNum . "," . $num; ?>">
        <input type="hidden" name="min" value="<?php echo $min; ?>">

        <input type="submit" value="Enviar">

    </form>
    <?php

        //echo $min;

    }

    ?>

</body>
</html>