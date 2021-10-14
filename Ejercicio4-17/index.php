<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma 100 Siguientes</title>
</head>
<body>
    
    <?php 
    
        $num = $_POST['num'];
        $resultado = 0;

        for($i = 0; $i < 100; $i++){

            $resultado += $num;
            $num++;

        }

        echo $resultado;
    
    ?>

    <form action="#" method="post">

        Número: <input type="number" name="num">
        <input type="submit" value="Enviar">

    </form>

</body>
</html>