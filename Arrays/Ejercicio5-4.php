<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambia Ocurrencias</title>
</head>
<body>
    
    <?php 
    
        $camb = $_POST['camb'];
        $sust = $_POST['sust'];

        if(!isset($num)){

            $num = new SplFixedArray(100);

            foreach($num as $valor){

                $valor = rand(0, 20);
    
                echo $valor , ' ';
    
            }

        }else{

            for($i = 0; $i < count($num); $i++){

                //echo $camb , '<br>';
    
                echo $num[$i] , '<br>';
    
                if($num[$i] == $camb){
    
                    echo '<span style="color:red">' , $sust , '</span>';
    
                }else{
    
                    echo $num[$i];
    
                }

        }
        
        

        }
    
    ?>

    <form action="#" method="post">

        Número a cambiar: <input type="number" name="camb"><br>
        Número sustituto: <input type="number" name="sust"><br>
        <input type="submit" value="Enviar">

    </form>

</body>
</html>