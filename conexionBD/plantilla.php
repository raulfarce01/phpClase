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

		$dwes = new mysqli('localhost', 'mismuertos', 'aa', 'dwes');        

    ?>

<div id="encabezado">
	<h1>Ejercicio: </h1>
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
</div>

<div id="contenido">
	<h2>Resultado de Búsqueda</h2>
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
</div>

<div id="pie">
</div>
</body>
</html>
