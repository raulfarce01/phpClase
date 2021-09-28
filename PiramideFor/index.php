<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        for($x=0; $x<=9; $x++){
            $s = $x;
            while($s>0){
                echo '&nbsp;';
                $s--;
            }
            for($y=0; $y <= 9 - $x; $y++){
                if($x == 0 || $x == 9){
                    echo '*';
                }else{
                    if($y == 0 || $y == 9 - $x){
                        echo '*';
                    }else{
                        echo "&nbsp;&nbsp;";
                    }
                }
            }
            echo '<br>';
        }

    ?>

</body>
</html>