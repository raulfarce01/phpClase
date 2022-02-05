<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualización</title>
    <link href="./css/actualizar.css" rel="stylesheet" type="text/css">

</head>
<body>

    <?php

        $db = new PDO('mysql:host=localhost; dbname=dwes', 'dwes', 'abc123');
        $codProd = $_POST['codProd'];
        $nombreProd = $_POST['nombreProd'];
        $descProd = $_POST['descProd'];
        $pvpProd = $_POST['pvpProd'];

        //echo $codProd;

        /*echo "UPDATE producto SET nombre_corto = '$nombreProd', descripcion = '$descProd', PVP = $pvpProd WHERE cod = '$codProd'";*/
        $update = $db->query("UPDATE producto SET nombre_corto = '$nombreProd', descripcion = '$descProd', PVP = $pvpProd WHERE cod = '$codProd'");
        $update->execute();

    ?>

    <form action="./listado.php" method="post" name="formulario">

        <input type="hidden" name="act" value="1">

    </form>


    <script>
    
        window.onload = function ()
        {

		    document.forms["formulario"].submit();

        }
    
    </script>

</body>
</html>