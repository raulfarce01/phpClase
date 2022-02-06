<?php 

require './Conexion.php';
$idFig = $_POST['idFig'];
$db = new Conexion('frikyAdmin', '123456', 'frikytienda');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php  $db->createSelectSimple('figura', 'nombreFig', 'idFig', $idFig);?>
    </title>
    <link href="../css/editar.css" rel="stylesheet" type="text/css">

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

    <form action="./actualizar.php" method="post">

    <input type="hidden" name="codProd" value="<?php echo $idFig; ?>">

    <p>
        <p><label for="nombreFig">Nombre: </label></p>
        <input type="text" size="30" value="<?php echo $db->createSelectSimple('figura', 'nombreFig', 'idFig', $idFig); ?>" name="nombreFig">
    </p>

    <p>
        <p><label for="descFig">Descripción: </label></p>
        <textarea name="descFig" rows="20" cols="50"><?php echo $db->createSelectSimple('figura', 'descFig', 'idFig', $idFig); ?></textarea>
    </p>

    <p>
        <p><label for="precioFig">PVP: </label></p>
        <input type="number" step=0.01 name="precioFig" value="<?php echo $db->createSelectSimple('figura', 'precioFig', 'idFig', $idFig); ?>">
    </p>

    <input type="submit" value="Actualizar" name="act">
    <a href="../index.php"><input type="button" value="Cancelar" name="cancel"></a>


    </form>

</body>
</html>