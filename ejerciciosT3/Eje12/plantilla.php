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
		$dwes = new mysqli('localhost', 'dwes', 'abc123', 'dwes');   
        $consulta = $dwes->stmt_init(); 

        //Creamos la consulta para seleccionar el nombre y el código del producto
        $consulta->prepare('SELECT p.nombre_corto, p.cod FROM producto p;');    

        //Ejecutamos la consulta
        $consulta->execute();

        //Sustituimos los valores de la consulta y los asignamos a una variable
        $consulta->bind_result($nombreProd, $codProd);


        //SELECT p.nombre_corto, t.nombre, s.unidades, p.cod FROM producto p INNER JOIN stock s ON s.producto = p.cod INNER JOIN tienda t ON t.cod = s.tienda;
        //$consulta->bind_result($prods, $tienda, $unidades);
    ?>

<div id="encabezado">
	<h1>Ejercicio: </h1>
    
	<form action="#" method="post">

        <select name="lista1">

            <?php

                //Recorremos el objeto en el que se almacenan los registros de la consulta
                while($consulta->fetch()){

                    //Creamos seleccionables dentro de un botón select para dar a elegir al usuario un producto
                    echo "<option value='$codProd'>$nombreProd</option>";

                }

            ?>

        </select>
        <input type="submit" value="Enviar" name="enviar">

    </form>
</div>

<div id="contenido">
	<h2>Resultado de Búsqueda</h2>
	<?php 

    if(isset($_POST['enviar'])){
        
        $lista1 = $_POST['lista1'];

        //$consultaRes = $dwes->stmt_init();
        $consulta->prepare("SELECT p.nombre_corto, t.nombre, s.unidades FROM producto p INNER JOIN stock s ON s.producto = p.cod INNER JOIN tienda t ON t.cod = s.tienda WHERE p.cod = '$lista1';
        ");
        $consulta->execute();
        $consulta->bind_result($nombreProdF, $nombreTienda, $unidadesF);

        while($consulta->fetch()){

            echo "<p>$nombreProdF se encuentra en la tienda $nombreTienda con un stock de $unidadesF</p>";


        }


            
        }
        
        $dwes->close();
    ?>
</div>

<div id="pie">
</div>
</body>
</html>
