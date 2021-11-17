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

        $coincidenciaNom = 0;
        $coincidenciaTlf = 0;

        if(isset($_POST['enviar'])){

            $contacto = $_POST['contacto'];

            foreach($contacto as $clave => $valor){

                echo $clave . ', ' . $valor;

            }

            echo var_dump($contacto[0]);

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
            echo '<table border=1pt><tr><td>Nombre</td><td>Teléfono</td></tr>';

                foreach($contacto as $clave => $valor){

                    echo '<tr><td>' . $valor . '</td><td>' . $clave . '</td></tr>';

                }

            echo '</table>';
        }else{

            echo 'No hay usuarios registrados';

        }
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
                <td><input type="text" name="tlf" value="<?php echo $tlf; ?>"></td>
            </p>
        </tr>

        <input type="hidden" name="contacto[<?php $_POST['tlf']?>]" value="<?php echo $contacto; ?>">

        <tr>
            <p>
                <td><input type="submit" value="Enviar" name="enviar"></td>
            </p>
        </tr>

    </form>

    <?php

        function compruebaDatos($nombre, $tlf){

            echo 'CompruebaDatos <br>';

            foreach($contacto as $clave => $valor){

                echo 'Valor: ' . $valor . ', Nombre: ' . $nombre . '<br>';

                if($valor == $nombre){

                    $coincidencia++;

                }

                if($clave == $tlf){

                    $coincidencia++;

                }

            }

            if($coincidenciaNom == 0 && $coincidenciaTlf == 0){

                añadeContacto($nombre, $tlf);

            }

            if($coincidenciaNom == 1 && $coincidenciaTlf == 0){

                actualizaContacto($nombre, $tlf);

            }

            $coincidenciaNom = 0;
            $coincidenciaTlf = 0;

        }

        function compruebaDatosBorra($nombre){

            echo 'compruebaDatosBorra <br>';

            foreach($contacto as $clave => $valor){

                if ($valor == $nombre){

                    $coincidenciaNom++;

                }

            }

            if($coincidenciaNom == 1){

                borraContacto($nombre);

            }else{

                echo 'No existen nadie con ese nombre para borrar en la agenda <br>';

            }

        }

        function borraContacto($nombre){

            echo 'borraContacto';

            foreach($contacto as $clave => $valor){

                if($nombre == $valor){

                    unset($contacto[$clave]);

                    echo 'borraContacto entra if <br>';

                }

            }

        }

        function actualizaContacto($nombre, $tlf){

            echo 'actualizaContacto <br>';

            foreach($contacto as $clave => $valor){

                if($nombre == $valor){

                    echo 'if actualizaContacto <br>';

                    $clave = $tlf;

                }

            }

        }

        function añadeContacto($nombre, $tlf){

            $contacto[$tlf] = $nombre;

            echo var_dump($contacto);

            echo 'Función AñadeContacto <br>';

        }

    ?>

</body>
</html>