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

        //Inicializamos unobjeto PDO para conectar el código a la base de datos
        $dwes = new PDO('mysql:host=localhost; dbname=dwes', 'dwes', 'abc123');        

    ?>

    <form action="#" method="post">

        <select name="lista1">

            <?php

                //Recorremos la consulta y almacenamos los valores en el array asociativo registro
                foreach($dwes->query("SELECT nombre_corto, cod FROM producto;") as $registro){

                    echo "<option value='" . $registro['cod'] . "'>" . $registro['nombre_corto'] . "</option>";

                }

            ?>

        </select>
        <input type="submit" value="Enviar" name="enviar">

    </form>

    <?php 

    if(isset($_POST['enviar'])){
        $lista1 = $_POST['lista1'];
    
        //Ejecutamos la consulta para mostrar el resultado del producto seleccionado por el usuario en el formulario
        foreach($dwes->query("SELECT p.nombre_corto, t.nombre, s.unidades, p.cod FROM producto p INNER JOIN stock s ON s.producto = p.cod INNER JOIN tienda t ON t.cod = s.tienda WHERE p.cod = '$lista1';") as $registro){

            //Aquí usamos un índice numérico ya que PDO no permite el formato de 'p.nombre_corto'
            echo "<p>Hay " . $registro[2] . " del producto: " . $registro[0] . " en la sucursal: " . $registro[1] . "</p>";

        }
        
    }
    ?>

</body>
</html>