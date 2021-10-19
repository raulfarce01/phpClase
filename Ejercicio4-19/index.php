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
    
        if($_POST['mat'] == "/"){

            for($i = 0; $i < $hide; $i++){
                for($j = 0; $j < $i; $j++){

                    if($j == $i/2){
                        echo '/ <br>';
                    }else{
                        echo '&nbsp;';
                    }

                }
            }

        }else if($_POST['mat'] == "/"){

        }else if($_POST['mat'] == "/"){

        }else if($_POST['mat'] == "/"){

        }else{
            echo 'Error, material introducido no válido';
        }
    ?>

    <form action="#" method="post">


        Material de la pirámide: <br>
        <input type="radio" name="mat" value="/">&nbsp;/<br>
        <input type="radio" name="mat" value="+">&nbsp;+<br>
        <input type="radio" name="mat" value=".">&nbsp;.<br>
        <input type="radio" name="mat" value="*">&nbsp;*<br>
        <input type="radio" name="mat" value="-">&nbsp;-<br><br>

        Altura de la pirámide: <input type="number" name="hide"><br>
        <input type="submit" value="Enviar">

    </form>

</body>
</html>