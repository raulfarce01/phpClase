<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    
    <?php 
    
        $num = $_POST['num'];
        $res = 1;

        while($num > 0){

            $res *= $num;
            $num --;

        }
    
        echo $res;
    ?>

    <form action="#" method="post">

        Número: <input type="number" name="num">
        <input type="submit" value="Enviar">

    </form>

</body>
</html>