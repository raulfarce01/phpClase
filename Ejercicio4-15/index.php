<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potencia</title>
</head>
<body>
    
    <?php 
    
        $base = $_POST['base'];
        $exp = $_POST['exp'];

        for($i = 1; $i <= $exp; $i++){
            echo $base, '<sup>', $i ,'</sup> <br>';
        }
    
    ?>

    <form action="#" method="post">

        Base: <input type="number" name="base"><br>
        Exponente: <input type="number" name="exp">

        <input type="submit" value="Enviar">

    </form>

</body>
</html>