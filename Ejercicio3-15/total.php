<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test de infidelidad</title>
</head>
<body>

    <?php

        // $q1 = $_POST['q1'];
        // $q2 = $_POST['q2'];
        // $q3 = $_POST['q3'];
        // $q4 = $_POST['q4'];
        // $q5 = $_POST['q5'];
        // $q6 = $_POST['q6'];
        // $q7 = $_POST['q7'];
        // $q8 = $_POST['q8'];
        // $q9 = $_POST['q9'];
        // $q10 = $_POST['q10'];

        $total = 0;

        if($_POST['q1'] == "si"){
            $total += 3;
        }
        if($_POST['q2'] == "si"){
            $total += 3;
        }
        if($_POST['q3'] == "si"){
            $total += 3;
        }
        if($_POST['q4'] == "si"){
            $total += 3;
        }
        if($_POST['q5'] == "si"){
            $total += 3;
        }
        if($_POST['q6'] == "si"){
            $total += 3;
        }
        if($_POST['q7'] == "si"){
            $total += 3;
        }
        if($_POST['q8'] == "si"){
            $total += 3;
        }
        if($_POST['q9'] == "si"){
            $total += 3;
        }
        if($_POST['q10'] == "si"){
            $total += 3;
        }

        if($total >= 0 && $total <= 10){
            echo '¡Enhorabuena! tu pareja parece ser totalmente fiel.';
        }else if($total > 10 && $total <= 21){
            echo 'Quizás exista el peligro de otra persona en su vida o en su mente, aunque seguramente será algo sin importancia. No bajes la guardia.';
        }else {
            echo 'Tu pareja tiene todos los ingredientes para estar viviendo un romance con otra persona. Te aconsejamos que indagues un poco más y averigües que es lo que está pasando por su cabeza.';
        }

    ?>

</body>
</html>