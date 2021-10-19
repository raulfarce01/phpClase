<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma 10000</title>
</head>
<body>

    <?php 
    
        $num = $_POST['num'];
        $cant = $_POST['cant'];
        $total = $_POST['total'];

        if($total < 10000){

            $total += $num;
            $cant++;

        }else{

            $media = $total/$cant;

            echo 'Total de la suma: ' , $total , '<br>';
            echo 'Media: ' , $media , '<br>';
            echo 'Cantidad de números: ' , $cant , '<br>';

        }
    
    ?>
    
    <form action="#" method="post">

        <input type="number" autofocus="autofocus" name="num">
        <input type="hidden" name="cant" value="<?php echo $cant ?>">
        <input type="hidden" name="total" value="<?php echo $total ?>">
        <input type="submit" value="Enviar">

    </form>
</body>
</html>