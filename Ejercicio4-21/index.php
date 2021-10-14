<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Impar; Mayor par</title>
</head>
<body>

    <?php 

        $num = $_POST['num'];
        $mayor = $_POST['mayor'];
        $mediaImpar = $_POST['mediaImpar'];
        $acum = $_POST['acum'];

        if(!isset($mayor)){
            $mayor = 0;
        }
        if(!isset($mediaImpar)){
            $mediaImpar = 0;
        }
        if(!isset($acum)){
            $acum = 0;
        }
        if($num >= 0){

            //echo 'if1';
            if($num % 2 == 0){
                //echo 'if2';
                if($num > $mayor){
                    //echo'if3';
                    $mayor = $num;
                }

            }else{
                //echo 'else1';
                $mediaImpar += $num;
                $acum++;

            }
        }else{
            //echo 'else2';
            echo 'El número mayor de los pares es: ' , $mayor , '<br>';
            echo 'La media de los impares es: ' , $mediaImpar/$acum , '<br>';

        }



    ?>

    <form action="#" method="post">

        Número: <input type="number" name="num">
        <input type="hidden" name="mayor" value="<?php echo $mayor ?>">
        <input type="hidden" name="mediaImpar" value="<?php echo $mediaImpar ?>">
        <input type="hidden" name="acum" value="<?php echo $acum ?>">
        <input type="submit" value="Enviar">

    </form>

</body>
</html>