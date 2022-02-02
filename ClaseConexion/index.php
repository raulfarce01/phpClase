<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexión a Base de Datos</title>
</head>
<body>

    <?php

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    require_once './app/Conexion.php';

    $dwes = new Conexion('dwes', 'abc123', 'dwes');

    $dwes->createSelectSimple('tienda', '*');
    /*mirar else linea 108*/$dwes->createSelectSimple('tienda', 'cod, nombre');
    //$dwes->createSelectSimple('tienda', '*', 'cod', 3);
    $dwes->createSelectSimple('producto', 'pvp', 'cod', 'ARCLPMP32GBN');
    $dwes->createSelectSimple('producto', 'pvp, nombre_corto', 'cod', 'ARCLPMP32GBN');
    $dwes->createSelectSimple('producto', 'pvp, nombre_corto');
    $dwes->createSelectSimple('producto', 'nombre_corto', 'cod');

    $stock = Array('8NIGE', 6, 2);
    $dwes->insertData('productos', $stock);

    $dwes->updateData('stock', 'producto', '8NIGE', 'unidades', 4);

    //$dwes->deleteData('stock', 'producto', '8NIGE');

    $dwes->closeConex();

    ?>

</body>
</html>