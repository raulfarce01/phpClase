<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
</head>
<body>
    
    <?php

        $num = $_POST['num'];
        $cant = $_POST['cant'];
        $pos = $_POST['pos'];
        $neg = $_POST['neg'];
        
        if(!isset($pos)){
            $pos = 0;
        }
        if(!isset($neg)){
            $neg = 0;
        }
        if(!isset($cant)){
            $cant = 0;
        }

        if($cant < 10){
            echo 'Introduce un número: ';
            if($num >= 0){
                $pos++;
            }else{
                $neg++;
            }
            $cant++;
        }else{
            echo 'Positivos: ' , $pos , '<br>';
            echo 'Negativos: ' , $neg , '<br>';
        }

    ?>

    <form action="#" method="post">
        <input type="number" name="num" autofocus="autofocus"><br>
        <input type="hidden" name="cant" value="<?php echo $cant ?>">
        <input type="hidden" name="pos" value="<?php echo $pos ?>">
        <input type="hidden" name="neg" value="<?php echo $neg ?>">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>