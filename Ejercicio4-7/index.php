<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>

    <?php

        $num = $_POST['num'];
        $oportunidades = 4;
        
        for($i = 0; $i < $oportunidades; $i++){
            
            

        }

    ?>
    
    Te quedan <?php $oportunidades-- ?> oportunidades.<br>
    Introduce un número de 4 cifras.<br>

    <form action="#" method="post">
    
        Número: <input type="number" name="num"><br><br>

        <input type="submit" value="Enviar">

    </form>

</body>
</html>