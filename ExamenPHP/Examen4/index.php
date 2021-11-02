<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pirámide</title>
</head>
<body>

    <?php
    
        $hide = $_POST['hide'];
        $ancho = 0;

        if(!isset($hide)){
            echo 'Inserta una altura';
        }else{
        
            for($i = $hide; $i > 0; $i--){
                for($j = 1; $j <= $i + $ancho; $j++){

                    if($j < $i - 1){
                        echo $j;
                    }else{
                        echo '&nbsp;&nbsp;';
                    }

                }

                $ancho+=2;
                echo '<br>';
            }
        
        }
    
    ?>
    
    <form action="#" method="post">

        Altura de la Pirámide: <input type="number" name="hide"><br>
        <input type="submit" value="Enviar">

    </form>

</body>
</html>