<?php 

require './app/Conexion.php';
$codProd = $_POST['codProd'];
$db = new Conexion('dwes', 'abc123', 'dwes');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php  $db->createSelectSimple('producto', 'nombre_corto', 'cod', $codProd);?>
    </title>
    <link href="./css/editar.css" rel="stylesheet" type="text/css">

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

    <main>

        <form action="./actualizar.php" method="post">

            <input type="hidden" name="codProd" value="<?php echo $codProd; ?>">

            <p>
                <p><label for="nombreProd">Nombre: </label></p>
                <input type="text" size="30" value="<?php echo $db->createSelectSimple('producto', 'nombre_corto', 'cod', $codProd); ?>" name="nombre">
            </p>

            <p>
                <p><label for="descProd">Descripción: </label></p>
                <textarea name="descProd" rows="20" cols="50"><?php echo $db->createSelectSimple('producto', 'descripcion', 'cod', $codProd); ?></textarea>
            </p>

            <p>
                <p><label for="pvpProd">PVP: </label></p>
                <input type="number" step=0.01 name="pvpProd" value="<?php echo $db->createSelectSimple('producto', 'PVP', 'cod', $codProd); ?>">
            </p>

            <input type="submit" value="Actualizar" name="act">
            <a href="../listado.php"><input type="button" value="Cancelar" name="cancel"></a>


        </form>

    </main>
    
    <footer>

        DWES - IES Puertas del Campo - Raúl Fernández Arce

    </footer>

</body>
</html>