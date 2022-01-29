<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Plantilla para Ejercicios Tema 3</title>
  <link href="dwes.css" rel="stylesheet" type="text/css">
</head>

<body>

	<?php

		error_reporting(E_ALL);
		ini_set('display_errors', '1');

		$valorLista = 1;

        //Iniciamos la conexión con la base de datos
		$dwes = new PDO('mysql:host=localhost; dbname=dwes', 'dwes', 'abc123');   

        //Creamos la consulta para seleccionar el nombre y el código del producto
        $consulta = $dwes->prepare('SELECT nombre_corto, cod FROM producto');    

        //Ejecutamos la consulta
        $consulta->execute();

        //SELECT p.nombre_corto, t.nombre, s.unidades, p.cod FROM producto p INNER JOIN stock s ON s.producto = p.cod INNER JOIN tienda t ON t.cod = s.tienda;
        //$consulta->bind_result($prods, $tienda, $unidades);
    ?>

<div id="encabezado">
	<h1>Ejercicio: </h1>
    
	<form action="#" method="post">

        <select name="lista1">

            <?php

                //Recorremos el objeto en el que se almacenan los registros de la consulta
                foreach($consulta as $registros){

                    //Creamos seleccionables dentro de un botón select para dar a elegir al usuario un producto
                    echo "<option value='" . $registros['cod'] . "'>" . $registros['nombre_corto'] . "</option>";

                }

            ?>

        </select>

        <select name="lista2">

            <?php

                //Comprobamos que no ocurra ninguna excepción al hacer la consulta
                try{

                    $consulta = $dwes->prepare('SELECT DISTINCT nombre, cod FROM tienda;');  
                
                }catch (PDOException $e){

                    echo "Error: $e->getMessage()";

                }

                //Ejecutamos la consulta
                $consulta->execute();

                //Recorremos el objeto en el que se almacenan los registros de la consulta
                foreach($consulta as $registros){

                    //Creamos seleccionables dentro de un botón select para dar a elegir al usuario un producto
                    echo "<option value='" . $registros['cod'] . "'>" . $registros['nombre'] . "</option>";

                }

            ?>

        </select>

       <input type="number" name="uds" require autofocus>
        <input type="submit" value="Enviar" name="enviar">

    </form>
</div>

<div id="contenido">
	<h2>Resultado de Búsqueda</h2>
	<?php 

    if(isset($_POST['enviar'])){
        
        $udsIn = $_POST['uds'];
        $tienda = $_POST['lista2'];
        $prod = $_POST['lista1'];

        //echo "SELECT unidades FROM stock WHERE tienda = $tienda AND producto = '$prod'";

        //Se comprueba si se puede realizar la inserción o actualización correctamente
        try{

            if($udsIn >= 0){

                $consulta = $dwes->query("SELECT unidades FROM stock WHERE tienda = $tienda AND producto = '$prod'");
    
                if($consulta->fetch()){
    
                    //echo "UPDATE stock SET unidades = $udsIn WHERE tienda = $tienda AND producto = '$prod'";
    
                    $consulta = $dwes->query("UPDATE stock SET unidades = $udsIn WHERE tienda = $tienda AND producto = '$prod'");
    
                    echo "La consulta de actualización se ha realizado correctamente";
    
                }else{
    
                    //echo "INSERT INTO stock VALUES ('$prod', $tienda, $udsIn)";
    
                    $consulta = $dwes->query("INSERT INTO stock VALUES ('$prod', $tienda, $udsIn)");
    
                    echo "La consulta de inserción se ha realizado correctamente";
    
                }
    
            }

        }catch (PDOException $e){

            echo "<p>Error: $p->getMessage()</p>";

        }
                    
    }

    ?>
</div>

<div id="pie">
</div>
</body>
</html>
