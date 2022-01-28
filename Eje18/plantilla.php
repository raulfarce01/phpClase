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
        $consulta = $dwes->prepare('SELECT p.nombre_corto, p.cod, s.tienda, s.producto FROM producto p INNER JOIN stock s ON s.producto = p.cod;');    

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
                    echo "<option value='" . $registros['nombre_corto'] . "'>" . $registros['nombre_corto'] . "</option>";

                }

            ?>

        </select>

        <select name="lista2">

            <?php

                $consulta = $dwes->prepare('SELECT DISTINCT nombre FROM tienda;');    

                //Ejecutamos la consulta
                $consulta->execute();


                //Recorremos el objeto en el que se almacenan los registros de la consulta
                foreach($consulta as $registros){

                    //Creamos seleccionables dentro de un botón select para dar a elegir al usuario un producto
                    echo "<option value='" . $registros['nombre'] . "'>" . $registros['nombre'] . "</option>";

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

        if($udsIn >= 0){

            $consulta = $dwes->prepare("SELECT unidades FROM stock WHERE tienda = (SELECT cod FROM tienda WHERE nombre = $tienda)");
            $consulta->execute();

            if($consulta != NULL){

                $consulta = $dwes->prepare("UPDATE stock SET unidades = $udsIn WHERE tienda = (SELECT cod FROM tienda WHERE nombre = $tienda) AND producto = (SELECT nombre_corto FROM producto WHERE nombre_corto = $prod)");
                $consulta->execute();

            }else{

                $consulta = $dwes->prepare("INSERT INTO stock VALUES ($prod, $tienda, $udsIn)");
                $consulta->execute();

            }

        }else{

            echo 'Debes insertar un valor correcto';

        }
                    
    }

    ?>
</div>

<div id="pie">
</div>
</body>
</html>
