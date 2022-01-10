<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleado</title>
</head>
<body>
    
    <?php

        require 'Empleado.php';
        require 'Factura.php';
        require 'Racional.php';
        require 'RacionalCompleto.php';

        error_reporting(E_ALL);
        ini_set('display_errors', '1');

        $fecha1 = date("d-m-y");

        $emp1 = new Empleado("Raúl", 2750);

        if($emp1->muestraImpuesto()){

            echo 'Debe pagar Impuestos';

        }else{

            echo 'No debe pagar Impuestos';

        }

        $fact1 = new Factura(2000, $fecha1, 200, 3000, false);
        $fact2 = new Factura(2000, $fecha1, 200, 3000, true);

        echo $fact1;
        echo $fact2;

        $racNormal = new Racional("8/4");

        echo $racNormal;

        $racComp1 = new RacionalCompleto();
        $racComp2 = new RacionalCompleto(4);
        $racComp3 = new RacionalCompleto(4, 3);
        $racComp4 = new RacionalCompleto("7/6");

        echo $racComp1;
        echo $racComp2;
        echo $racComp3;
        echo $racComp4;

    ?>

</body>
</html>