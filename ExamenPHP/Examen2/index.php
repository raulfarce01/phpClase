<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primo</title>
</head>
<body>

    <?php
    
        $num = $_POST['num'];
        $primo = true;

        if(!isset($num)){
            echo 'Introduce un número';
        }else{

            for($i = 2; $i < $num; $i++){

                //Comprobamos que el número solo sea divisible entre sí mismo y uno
                if($num%$i == 0){

                    $primo = false;

                }

            }

            if($primo){
                echo 'El número introducido es primo';
            }else{
                echo 'El número introducido no es primo';
            }

        }
    
    ?>
    
    <form action="#" method="post">

        Número: <input type="number" name="num"><br>
        <input type="submit" value="Enviar">

    </form>

</body>
</html>