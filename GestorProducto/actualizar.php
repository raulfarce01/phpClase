<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualización</title>
</head>
<body>

    <?php

        $db = new mysqli('localhost', 'dwes', 'abc123', 'dwes');
        $codProd = $_POST['codProd'];
        $nombreProd = $_POST['nombreProd'];
        $descProd = $_POST['descProd'];
        $pvpProd = $_POST['pvpProd'];

        //echo $codProd;

        //echo "UPDATE INTO producto SET nombre_corto = '$nombreProd', descripcion = '$descProd', PVP = $pvpProd WHERE cod = '$codProd'";
        $db->query("UPDATE INTO producto SET nombre_corto = '$nombreProd', descripcion = '$descProd', PVP = $pvpProd");

    ?>

    <form action="./listado.php" method="post" name="formulario">

        <input type="submit" name="act">

    </form>


    <script>
    
        window.onload = function ()
        {

		    document.forms["formulario"].submit();

        }
    
    </script>

</body>
</html>