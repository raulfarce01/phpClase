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
            $nuevoNum = new SplFixedArray(15);
            $pos = 0;

        }else{
            if($countNum == 15){

                //commit

                $auxNum .= "," . $num;
                $auxNum = substr($auxNum, 2);
                $num = explode(",", $auxNum);

                $nuevoNum[0] = $num[14];
        
                for($i = 0; $i < count($num) - 1; $i++){

                    $nuevoNum[$i+1] = $num[$i];

                    //$pos++;

                }
        
                //echo "num0: " , $nuevoNum[0] , "<br> num14: " , $num[14] , "<br>";
                //$nuevoNum[0] = $num[14];
        
                foreach($nuevoNum as $valor){
        
                    echo $valor . '<br>';
        
                }

                /*echo 'Array 2 <br>';

                foreach($num as $valor){
        
                    echo $valor . '<br>';
        
                }*/
            }
        }

        
        
    if (($countNum < 15) || (!isset($num))){
    ?>
    
    <form action="#" method="post">

        <label for="num">Número:</label>
        <input type="number" name="num" autofocus><br>
        <input type="hidden" name="countNum" value="<?php echo ++$countNum ?>">
        <input type="hidden" name="auxNum" value="<?php echo $auxNum . "," . $num ?>">

        <input type="submit" value="Enviar">

    </form>
    <?php

        //echo $auxNum;

    }

    ?>

</body>
</html>