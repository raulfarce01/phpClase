<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <link href="./css/modify.css" rel="stylesheet" type="text/css">
    </head>
<body>
    
    <?php 
    
        error_reporting(E_ALL);
        ini_set('display_errors', '1');
        
        $db = new mysqli('localhost', 'frikyAdmin', '123456', 'frikytienda');

    ?>

    <header>

        <h1>Gestión de productos</h1>

    </header>

    <main>

        <?php

            if(isset($_POST['act'])){

                echo '<p>Se ha actualizado el producto correctamente</p>';

            }

        ?>

        <form action="#" method="post">

            <select name="idFig" id="idFig">

                <?php

                $consulta = $db->query("SELECT nombreFig, idFig FROM figura;");
                $resultado = $consulta->fetch_object();

                    while($resultado != NULL){

                        echo "<option value='$resultado->idFig'>$resultado->nombreFig</option>";
                        $resultado = $consulta->fetch_object();

                    }

                ?>

            </select>

            <input type="submit" value="Mostrar" name="send">
            <a href="./index.php"><div class="boton"><p>Inicio</p></div></a>


        </form>

        <div class="lista">
        <?php

            if(isset($_POST['send'])){

                $idFig = $_POST['idFig'];

                $consulta = $db->query("SELECT nombreFig, idFig, precioFig FROM figura WHERE idFig = $idFig;");
                $resultado = $consulta->fetch_object();

                while($resultado != NULL){

                    echo "<form action='./app/editar.php' method='post' class='formLista'>";


                    echo "<p>$resultado->nombreFig | PVP:$resultado->precioFig
                    <input type='hidden' name='idFig' value='$resultado->idFig'>
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