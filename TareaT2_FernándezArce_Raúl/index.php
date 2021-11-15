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

            $contacto = $_POST['contacto'];

            if(isset($_POST['nombre']) && isset($_POST['tlf'])){

                $nombre = $_POST['nombre'];
                $tlf = $_POST['tlf'];

                compruebaDatos($nombre, $tlf);

            }

            if(isset($_POST['nombre']) && !isset($_POST['tlf'])){

                $nombre = $_POST['nombre'];

                compruebaDatosBorra($nombre);

            }

            //print_r($contacto);

            //Generar tabla
            echo '<table>';

                foreach($contacto as $clave => $valor){

                    echo '<tr><td>' . $valor . '</td></td>' . $clave . '</tr>';

                }

            echo '</table>';
        }

        echo 'No hay usuarios registrados';

    ?>
    
    <form action="#" method="post">

    <table>
        <tr>

            <p>
                <td><label for="nombre">Nombre: </label></td>
                <td><input type="text" name="nombre" value="<?php echo $nombre; ?>" autofocus></td>
            </p>

            <?php

                if(isset($_POST['enviar']) && empty($_POST['nombre'])){
                    echo '<td><span style="color: red;"> Debes introducir un nombre </span></td>';
                }

            ?>
        </tr>

        <tr>
            <p>
                <td><label for="tlf">Teléfono: </label></td>
                <td><input type="number" name="tlf" value="<?php echo $tlf; ?>"></td>
            </p>
        </tr>

        <input type="hidden" name="contacto" value="<?php echo $contacto; ?>">

        <tr>
            <p>
                <td><input type="submit" value="Enviar" name="enviar"></td>
            </p>
        </tr>

    </form>

    <?php

        function compruebaDatos($nombre, $tlf){

            foreach($contacto as $clave => $valor){

                if($valor == $nombre && $tlf != $clave){

                    actualizaContacto($nombre, $tlf);

                }

                if(!in_array($nombre, $contacto)){

                    añadeContacto($nombre, $tlf);

                }

            }


        }

        function compruebaDatosBorra($nombre){

            if(in_array($nombre, $contacto)){

                borraContacto($nombre);

            }

        }

        function borraContacto($nombre){

            foreach($contacto as $clave => $valor){

                if($nombre == $valor){

                    unset($contacto[$clave]);

                }

            }

        }

        function actualizaContacto($nombre, $tlf){

            foreach($contacto as $clave => $valor){

                if($nombre == $valor){

                    $clave = $tlf;

                }

            }

        }

        function añadeContacto($nombre, $tlf){

            $contacto[$tlf] = $nombre;

        }

    ?>

</body>
</html>