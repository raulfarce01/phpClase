<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <link href="./css/listado.css" rel="stylesheet" type="text/css">
    </head>
<body>
    
    <?php 
    
        error_reporting(E_ALL);
        ini_set('display_errors', '1');
        
        $db = new mysqli('localhost', 'dwes', 'abc123', 'dwes');

    ?>

    <header>

        <h1>Gestión de productos</h1>

    </header>

    <main>

        <?php

            if(isset($_POST['act'])){

                echo '<p class="actualizado">Se ha actualizado el producto correctamente</p>';

            }

        ?>

        <form action="#" method="post">

            <select name="fam" id="fam">

                <?php

                $consulta = $db->query("SELECT nombre, cod FROM familia;");
                $resultado = $consulta->fetch_object();

                    while($resultado != NULL){

                        echo "<option value='$resultado->cod'>$resultado->nombre</option>";
                        $resultado = $consulta->fetch_object();

                    }

                ?>

            </select>

            <input type="submit" value="Mostrar" name="send">

        </form>

        <div class="lista">
        <?php

            if(isset($_POST['send'])){

                $fam = $_POST['fam'];

                $consulta = $db->query("SELECT p.nombre_corto, p.PVP, p.cod AS PCODPROD FROM producto p INNER JOIN familia f ON f.cod = p.familia WHERE p.familia = '$fam'");
                $resultado = $consulta->fetch_object();

                while($resultado != NULL){

                    echo "<form action='editar.php' method='post' class='formLista'>";


                    echo "<p>$resultado->nombre_corto | PVP:$resultado->PVP
                    <input type='hidden' name='codProd' value='$resultado->PCODPROD'>
                    <input type='submit' name='edit' value='Editar'></p>";
                    $resultado = $consulta->fetch_object();

                    echo "</form>";


                }


                $db->close();


            }

        ?>
        </div>

    </main>

    <footer>

        DWES - IES Puertas del Campo - Raúl Fernández Arce

    </footer>

</body>
</html>