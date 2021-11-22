<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <?php

        if(!isset($_POST['nombre'])){

            $nombre = "";
            $tlf = 0;
            $agendaNombre = [];
            $agendaTlf = [];

        }

        $nombre = $_POST['nombre'];
        $tlf = $_POST['tlf'];
        $arrayNombre = $_POST['arrayNombre'];
        $arrayTlf = $_POST['arrayTlf'];

        $arrayNombre .= "," . $nombre;
        $arrayTlf .= "," . $tlf;
        $arrayNombre = substr($arrayNombre, 2);
        $arrayTlf = substr($arrayTlf, 2);
        $arrayNombre = explode(",", $arrayNombre);
        $arrayTlf = explode(",", $arrayTlf);

        if(!in_array($nombre, $arrayNombre)){

            $arrayNombre[count($arrayNombre)] = $nombre;
            $arrayTlf[count($arrayTlf)] = $tlf;

        }else{
            
            for($i = 0; $i < count($arrayNombre); $i++){

                if($arrayNombre[$i] == $nombre && !empty($tlf)){

                    $arrayTlf[$i] = $tlf;

                }else if($arrayNombre[$i] == $nombre && empty($tlf)){

                    unset($arrayTlf[$i]);

                }

            }

        }

        $agendaNombre = $arrayNombre;
        $agendaTlf = $arrayTlf;

        echo '<table><tr><td>Nombre</td><td>Teléfono</td></tr>';

        for($i = 0; $i < count($agendaNombre); $i++){

            echo '<tr><td>' . $arrayNombre[$i] . '</td>' . $agendaTlf[$i] . '</tr>';

        }

        echo '</table>';


    ?>

    <form action="#" method="post">

        <p>
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" autofocus>
            <input type="hidden" name="arrayNombre" value="<?php echo $arrayNombre . "," . $nombre; ?>">
        </p>
        <?php

            if(isset($_POST['enviar']) && empty($_POST['nombre'])){
                echo '<td><span style="color: red;"> Debes introducir un nombre </span></td>';
            }

        ?>

        <p>
            <label for="tlf">Teléfono: </label>
            <input type="number" name="tlf">
            <input type="hidden" name="arrayTlf" size="19" pattern="(\d{9}|\w)" value="<?php echo $arrayTlf . "," . $tlf; ?>">

        </p>

        <p>
            <input type="submit" value="Enviar" name="enviar">
        </p>

    </form>

</body>

</html>