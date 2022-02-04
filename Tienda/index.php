<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>

    <?php

        error_reporting(E_ALL);
        ini_set('display_errors', '1');

        require './app/Conexion.php';

        $frikytienda = new Conexion('frikyAdmin', '123456', 'frikytienda');
        $mysqli = new mysqli('localhost', 'frikyAdmin', '123456', 'frikytienda');

    ?>
    
    <header>

        <h1>La Frikytienda</h1>

    </header>

    <nav>

        <a href="upload.php">Añadir un Producto</a>
        <a href="modify.php">Modificar un Producto</a>

    </nav>

    <main>

        <div class="productos">

            <?php

                $consulta = $mysqli->query("SELECT idFig, nombreFig, descFig, precioFig, imgFig FROM figura");
                $res = $consulta->fetch_object();

                while($res != NULL){

                    echo "
                    
                        <div class='producto'>
                        
                            <div class='imagen'>
                                <img width='100' src='data:image/png;base64, ".base64_encode($res->imgFig)."'></img>
                            </div>
                            <div class='nombre'>
                                $res->nombreFig            
                            </div>
                            <div class='descripcion'>
                                $res->descFig
                            </div>
                            <div class='precio'>
                                $res->precioFig €
                            </div>
                            <div class='compra'>



                            </div>
                        
                        </div>
                    
                    ";

                    $res = $consulta->fetch_object();

                }
                

            ?>

        </div>
        <div class="carrito">

            

        </div>

    </main>
</body>
</html>