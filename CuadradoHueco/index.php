<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuadrado</title>
</head>
<body>
    
    <?php

        $row = $_POST['row'];

        for($i = 0; $i <= $row; $i++){
            for($j = 0; $j <= $row; $j++){
                if($i == 0 || $i == $row){
                    echo '*';
                }else{
                    if($j == 0 || $j == $row){
                        echo '*';
                    }else{
                        echo '&nbsp;&nbsp;';
                    }
                }
            }
            echo '<br>';
        }

    ?>

        <form action="#" method="post">

            Filas: <input type="number" name="row">
            <input type="submit" value="Enviar">

        </form>
</body>
</html>