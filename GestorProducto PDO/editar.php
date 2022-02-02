<?php 

$codProd = $_POST['codProd'];
$db = new PDO('mysql:host=localhost; dbname=dwes', 'dwes', 'abc123');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php foreach($db->query("SELECT nombre_corto FROM producto WHERE cod = '$codProd'") as $nombre){

            echo $nombre['nombre_corto'];

        } ?>
    </title>
    <!--<link href="./css/estilos.css" rel="stylesheet" type="text/css">-->

</head>
<body>
    
    <?php

        //echo $codProd;

        //$nombre = $db->createSelectSimple('producto', 'nombre_corto', 'cod', $codProd);
        //$desc = $db->createSelectSimple('producto', 'descripcion', 'cod', $codProd);
        //$PVP = $db->createSelectSimple('producto', 'PVP', 'cod', $codProd);

        //echo $nombre, '<br>', $desc, '<br>', $PVP;

    ?>

    <header>
        <h1>Información del Producto</h1>
    </header>

    <form action="actualizar.php" method="post">

    <input type="hidden" name="codProd" value="<?php echo $codProd; ?>">

    <p>
        <p><label for="nombreProd">Nombre: </label></p>
        <input type="text" size="30" value="<?php foreach($db->query("SELECT nombre_corto FROM producto WHERE cod = '$codProd'") as $nombre){

        echo $nombre['nombre_corto'];

        } ?>" name="nombreProd">
    </p>

    <p>
        <p><label for="descProd">Descripción: </label></p>
        <textarea name="descProd" rows="20" cols="50"><?php foreach($db->query("SELECT descripcion FROM producto WHERE cod = '$codProd'") as $nombre){

        echo $nombre['descripcion'];

        } ?></textarea>
    </p>

    <p>
        <p><label for="pvpProd">PVP: </label></p>
        <input type="number" step=0.01 name="pvpProd" value="<?php foreach($db->query("SELECT PVP FROM producto WHERE cod = '$codProd'") as $nombre){

        echo $nombre['PVP'];

        } ?>">
    </p>

    <input type="submit" value="Actualizar" name="act">
    <a href="./listado.php"><input type="button" value="Cancelar" name="cancel"></a>


    </form>

</body>
</html>