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

        if(isset($_POST['enviar']) && isset($_POST['nombre'])){

            //$contacto = $_POST['contacto'];

            /*foreach($contacto as $clave => $valor){

                echo $clave . ', ' . $valor;

            }*/

            //echo var_dump($contacto[0]);

            if(isset($_POST['nombre']) && isset($_POST['tlf'])){

                $nombre = $_POST['nombre'];
                $tlf = $_POST['tlf'];

                $auxNombre .= "," . $nombre;
                $auxTlf .= "," . $tlf;
                $auxNombre = substr($auxNombre, 1);
                $auxTlf = substr($auxTlf, 1);
                $nombreA = explode(",", $auxNombre);
                $tlfA = explode(",", $auxTlf);

                echo count($nombreA) . ' ';
                echo count($tlfA) . ' ';

                compruebaDatos($nombre, $tlf, $nombreA, $tlfA);

            }

            if(isset($_POST['nombre']) && !isset($_POST['tlf'])){

                $nombre = $_POST['nombre'];

                compruebaDatosBorra($nombre, $nombreA, $tlfA);

            }

            //print_r($contacto);

            //Generar tabla
            echo '<table border=1pt><tr><td>Nombre</td><td>Teléfono</td></tr>';

                /*foreach($contacto as $clave => $valor){

                    echo '<tr><td>' . $valor . '</td><td>' . $clave . '</td></tr>';

                }*/

                for($i = 0; $i < count($nombreA); $i++){

                    echo '<tr><td>' . $nombreA[$i] . '</td><td>' . $tlfA[$i] . '</td></tr>';


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
                <!--<td><input type="text" name="nombre" value="<?php //echo $nombre; ?>" autofocus></td>-->
                <td><input type="text" name="nombre" autofocus></td>
                <input type="hidden" name="auxNombre" value="<?php echo $auxNombre . "," . $nombre ?>">
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
                <!--<td><input type="text" name="tlf" value="<?php //echo $tlf; ?>"></td>-->
                <td><input type="number" name="tlf" value="<?php echo $tlf ?>"></td>
                <input type="hidden" name="auxTlf" value="<?php echo $auxTlf . "," . $tlf ?>">

            </p>
        </tr>

        <!--<input type="hidden" name="contacto[<?php //echo $_POST['tlf']?>]" value="<?php //echo $_POST['nombre']; ?>">-->

        <tr>
            <p>
                <td><input type="submit" value="Enviar" name="enviar"></td>
            </p>
        </tr>

    </form>

    <?php

        function compruebaDatos($nombre, $tlf, &$nombreA, &$tlfA){

            //echo 'CompruebaDatos <br>';

            /*foreach($contacto as $clave => $valor){

                echo 'Valor: ' . $valor . ', Nombre: ' . $nombre . '<br>';

                if($valor == $nombre){

                    $coincidencia++;

                }

                if($clave == $tlf){

                    $coincidencia++;

                }

            }*/

            for($i = 0; $i < count($nombreA); $i++){

                if($nombreA[$i] == $nombre){

                    $coincidenciaNom++;

                }

            }

            for($i = 0; $i < count($tlfA); $i++){

                if($tlfA[$i] == $tlf){

                    $coincidenciaTlf++;

                }

            }

            echo $coincidenciaNom, ' ', $coincidenciaTlf;

            if($coincidenciaNom == 1 && $coincidenciaTlf == 1){

                añadeContacto($nombre, $tlf, $nombreA, $tlfA);

            }

            if($coincidenciaNom == 2 && $coincidenciaTlf == 1){

                actualizaContacto($nombre, $tlf, $nombreA, $tlfA);

            }

            $coincidenciaNom = 0;
            $coincidenciaTlf = 0;

        }

        function compruebaDatosBorra($nombre, &$nombreA, &$tlfA){

            echo 'compruebaDatosBorra <br>';

            /*foreach($contacto as $clave => $valor){

                if ($valor == $nombre){

                    $coincidenciaNom++;

                }

            }*/

            if($coincidenciaNom == 1){

                borraContacto($nombre, $nombreA, $tlfA);

            }else{

                echo 'No existe nadie con ese nombre para borrar en la agenda <br>';

            }

        }


        function borraContacto($nombre, &$nombreA, &$tlfA){

            echo 'borraContacto';

            /*foreach($contacto as $clave => $valor){

                if($nombre == $valor){

                    unset($contacto[$clave]);

                    echo 'borraContacto entra if <br>';

                }

            }*/

            for($i = 0; $i < count($nombreA); $i++){

                if($nombreA[$i] == $nombre){

                    unset($nombreA[$i]);
                    unset($tlfA[$i]);

                }

            }

        }


        function actualizaContacto($nombre, $tlf, &$nombreA, &$tlfA){

            echo 'actualizaContacto <br>';

            /*foreach($contacto as $clave => $valor){

                if($nombre == $valor){

                    echo 'if actualizaContacto <br>';

                    $clave = $tlf;

                }

            }*/

            for($i = 0; $i < $count($nombreA); $i++){

                if($nombreA[$i] == $nombre){

                    $tlfA[$i] = $tlf;

                }

            }

        }

        function añadeContacto($nombre, $tlf, &$nombreA, &$tlfA){

            //$contacto[$tlf] = $nombre;

            //echo var_dump($contacto);

            echo 'Función AñadeContacto <br>';

            /*$nuevaPos = count($nombreA) + 1;

            $nombreA[$nuevaPos] = $nombre;
            $tlfA[$nuevaPos] = $tlf;

            echo $nuevaPos;*/

            array_push($nombreA, $nombre);
            array_push($tlfA, $tlf);

        }

    ?>

</body>
</html>