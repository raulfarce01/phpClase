<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Agenda</title>
</head>
<body>

    <?php

        if(isset($_POST['enviar'])){

            if(isset($_POST['nombre']) && isset($_POST['tlf'])){

                $nombre = $_POST['nombre'];
                $tlf = $_POST['tlf'];

                compruebaDatos($nombre, $tlf);

            }

            if(isset($_POST['nombre']) && !isset($_POST['tlf'])){

                $nombre = $_POST['nombre'];

                compruebaDatosBorra($nombre);

            }
        }

    ?>
    
    <form action="#" method="post">

    <table>
        <tr>

            <p>
                <td><label for="nombre">Nombre: </label></td>
                <td><input type="text" name="nombre" value="<?php echo $nombre; ?>"></td>
            </p>

            <?php

                if(isset($_POST['enviar']) && empty($_POST['nombre'])){
                    echo '<span style="color: red;"> Debes introducir un nombre </span>';
                }

            ?>
        </tr>

        <tr>
            <p>
                <td><label for="tlf">Teléfono: </label></td>
                <td><input type="number" name="tlf" value="<?php echo $tlf; ?>"></td>
            </p>
        </tr>

        <tr>
            <p>
                <td><input type="submit" value="Enviar" name="enviar"></td>
            </p>
        </tr>
        <input type="hidden" name="contacto[]">

    </form>

    <?php

        function compruebaDatos($nombre, $tlf){

            

        }

    ?>

</body>
</html>