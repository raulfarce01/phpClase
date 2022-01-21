<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexión a Base de Datos</title>
</head>
<body>

    <h1>Ejercicio 11</h1>
    
    <?php
        $valorLista = 1;

        $dwes = new mysqli('localhost', 'mismuertos', 'aa', 'dwes');

        $consulta = $dwes->query('SELECT p.nombre_corto, t.nombre, s.unidades FROM producto p INNER JOIN stock s ON s.producto = p.cod INNER JOIN tienda t ON t.cod = s.tienda;');

        $lista = $consulta->fetch_object();

        

    ?>

    <form action="#" method="post">

        <select name="lista1">

            <?php

                while($lista != null){

                    echo "<option value='$lista->cod'>$lista->nombre_corto</option>";
                    $lista = $consulta->fetch_object();

                }

            ?>

        </select>
        <input type="submit" value="Enviar">

    </form>

    <?php 
    
        if(isset($_POST['Enviar'])){

            $lista = $consulta->fetch_object();

            while($lista != null){

                if($lista->cod == $lista1){

                    echo "$lista->nombre_corto se encuentra en la tienda $lista->nombre con un stock de $lista->unidades";

                }
                $lista = $consulta->fetch_object();

            }

        }

    ?>

</body>
</html>