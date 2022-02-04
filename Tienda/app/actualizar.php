<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualización</title>
    <!--<link href="./css/estilos.css" rel="stylesheet" type="text/css">-->

</head>
<body>

    <?php

        $db = new mysqli('localhost', 'frikyAdmin', '123456', 'frikytienda');
        $idFig = $_POST['idFig'];
        $nombreFig = $_POST['nombreFig'];
        $descFig = $_POST['descFig'];
        $prefioFig = $_POST['precioFig'];

        //echo $codProd;

        /*echo "UPDATE producto SET nombre_corto = '$nombreProd', descripcion = '$descProd', PVP = $pvpProd WHERE cod = '$codProd'";*/
        $db->query("UPDATE figura SET nombreFig = '$nombreFig', descFig = '$descFig', precioFig = $precioFig WHERE idFig = $idFig");

    ?>

    <form action="../modify.php" method="post" name="formulario">

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