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

    $dwes = new Conexion('mismuertos', 'aa', 'dwes');

    $dwes->createSelectSimple('tienda', '*');
    $dwes->createSelectSimple('productos', '*', 'cod', '3DSNG');
    $dwes->createSelectSimple('productos', '*', 'cod');

    $stock = Array('8NIGE', 2, 6);
    $dwes->insertData('productos', $stock);

    $dwes->deleteData('stock', 'producto', '8NIGE');

    $dwes->updateData('stock', 'producto', '3DSNG', 'unidades', 4);

    $dwes->closeConex();

    ?>

</body>
</html>