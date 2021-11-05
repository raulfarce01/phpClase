<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par, Impar</title>
</head>
<body>
    
    <?php 
    
        $num = $_POST['num'];
        $auxNum = $_POST['auxNum'];
        $countNum = $_POST['countNum'];

        if(!isset($num)){

            $countNum = 0;
            $auxNum = "";

        }else{

            if($countNum == 8){

                $auxNum = $auxNum . "," . $num;
                $auxNum = substr($auxNum, 2);
                $num = explode(",", $auxNum);

                foreach($num as $valor){

                    if($valor%2 == 0){

                        echo '<span style="color: red;">' . $valor . "</span><br>";

                    }else{

                        echo '<span style="color: blue;">' . $valor . "</span><br>";

                    }
                }
            }
        }

        if((!isset($num)) || ($countNum < 8)){
    
    ?>

    <form action="#" method="post">

        Número: <input type="number" name="num" autofocus><br>
        <input type="hidden" name="auxNum" value="<?php echo $auxNum , "," , $num; ?>">
        <input type="hidden" name="countNum" value="<?php echo ++$countNum; ?>">
        <input type="submit" value="Enviar">

    </form>

    <?php

            //echo $countNum;

        }

    ?>

</body>
</html>