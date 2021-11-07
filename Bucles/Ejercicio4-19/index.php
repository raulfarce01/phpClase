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


            for($i = $hide; $i > 0; $i--){
                for($j = 0; $j < $i + $ancho; $j++){
                    if($j < $i - 1){
                        echo '&nbsp;&nbsp;';
                    }else{
                        if($_POST['mat'] == "*"){

                            echo '*';

                        }else if($_POST['mat'] == "/"){

                            echo '/';
                
                        }else if($_POST['mat'] == "+"){
                
                            echo '+';

                        }else if($_POST['mat'] == "."){

                            echo '.';

                        }
                    }
                }
                $ancho+=2;
                echo '<br>';
            }
    ?>

    <form action="#" method="post">


        Material de la pirámide: <br>
        <input type="radio" name="mat" value="/">&nbsp;/<br>
        <input type="radio" name="mat" value="+">&nbsp;+<br>
        <input type="radio" name="mat" value=".">&nbsp;.<br>
        <input type="radio" name="mat" value="*">&nbsp;*<br>
        <input type="radio" name="mat" value="-">&nbsp;-<br><br>

        Altura de la pirámide: <input type="number" name="hide" autofocus="autofocus"><br>
        <input type="submit" value="Enviar">

    </form>

</body>
</html>