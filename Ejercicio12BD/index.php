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

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

        $valorLista = 1;

        $dwes = new mysqli('localhost', 'mismuertos', 'aa', 'dwes');        

    ?>

    <form action="#" method="post">

        <select name="lista1">

            <?php

                $consulta = $dwes->query('SELECT p.nombre_corto, t.nombre, s.unidades, p.cod FROM producto p INNER JOIN stock s ON s.producto = p.cod INNER JOIN tienda t ON t.cod = s.tienda;');

                $lista = $consulta->fetch_object();

                while($lista != null){

                    echo "<option value='$lista->cod'>$lista->nombre_corto</option>";
                    $lista = $consulta->fetch_object();

                }

            ?>

        </select>
        <input type="submit" value="Enviar" name="enviar">

    </form>

    <?php 

    if(isset($_POST['enviar'])){
        $lista1 = $_POST['lista1'];
    

        $consulta2 = $dwes->query("SELECT p.nombre_corto, t.nombre, s.unidades, p.cod FROM producto p INNER JOIN stock s ON s.producto = p.cod INNER JOIN tienda t ON t.cod = s.tienda WHERE p.cod = '$lista1';");
        $lista2 = $consulta2->fetch_object();

        while($lista2 != null){


           /* if($lista2->cod == $lista1){*/

                echo "<p>$lista2->nombre_corto se encuentra en la tienda $lista2->nombre con un stock de $lista2->unidades</p>";
            
    
           /* }*/
            $lista2 = $consulta2->fetch_object();

        }
        
    }
        $dwes->close();
    ?>

</body>
</html>