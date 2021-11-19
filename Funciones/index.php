<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>
<body>
    
    <?php 
    
        //$num = 123456789;

        include_once 'funciones.inc.php';

        //echo juntaNumeros($num, 464);

        $array = generaArrayInt(10, 0, 20);

        //echo posicionEnArray($array, 8) . '<br>';

        /*if(estaEnArrayInt($array, 8)){

            echo 'Encontrado';

        }else{

            echo 'No encontrado';

        }*/

        print_r(rotaIzquierdaArrayInt($array, 2));

        echo '<br>';

        print_r($array);
    
    ?>

</body>
</html>