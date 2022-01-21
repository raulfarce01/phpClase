<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexión a Base de Datos</title>
</head>
<body>
    
    <?php

        $dwes = new mysqli();
        $dwes->connect('localhost', 'mismuertos', 'aa', 'dwes');

        $error = $dwes->connect_errno;

        if($error != null){

            echo "<p>Error $error conectando a la base de datos: $dwes->connect_error</p>";

        }else{

            echo '<p>Illo, sa conectao</p>';

            $dwes->select_db('dwes');

            $dwes->query("UPDATE stock SET unidades = 1 WHERE tienda = 1 AND producto = '3DSNG';");
            $dwes->query("INSERT INTO stock VALUES ('3DSNG', 3, 1);");

            $consulta = $dwes->query("SELECT * FROM stock;");

            $stock = $consulta->fetch_object();

            while($stock != null){

                print "<p>Producto: $stock->producto | Tienda: $stock->tienda | Unidades: $stock->unidades</p>";

                $stock = $consulta->fetch_object();

            }
            
            $dwes->close();
            
        }

        

    ?>

</body>
</html>