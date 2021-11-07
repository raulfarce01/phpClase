<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media -1</title>
</head>
<body>
    
    <?php 
    
        $num = $_POST['num'];
        $acum = $_POST['acum'];
        $media = $_POST['media'];

        if(!isset($acum)){
            $acum = 0;
        }
        if(!isset($media)){
            $media = 0;
        }
        if(isset($num)){
            if($num > -1){
                $media += $num;
                $acum++;
    
                echo 'Introduce otro valor <br>';
            }else if($num == -1){
                $media = $media / $acum;
    
                echo 'La media es de: ' , $media;
            }else{
                echo 'Valor Incorrecto <br>';
            }
        }        
    ?>

    <form action="#" method="post">

        Número: <input type="number" name="num">
        <input type="hidden" name="acum" value="<?php echo $acum ?>">
        <input type="hidden" name="media" value="<?php echo $media ?>">
        
        <input type="submit" value="Enviar">

    </form>

</body>
</html>