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
        require './app/vistaImagen.php';

        $frikytienda = new Conexion('frikytienda', '123456', 'frikytienda');
        $mysqli = new mysqli('localhost', 'frikytienda', '123456', 'frikytienda');

    ?>
    
    <header>

        <h1>La Frikytienda</h1>

    </header>

    <nav>

        <a href="upload.php">Añadir un Producto</a>
        <!--<a href="modify.php">Modificar un Producto</a>-->

    </nav>

    <main>

        <div class="productos">

            <?php

                $consulta = $mysqli->query("SELECT nombreFig, descFigura, precioFigura, imgFig FROM figura");
                $res = $consulta->fetch_object();

                while($res != NULL){

                    echo "
                    
                        <div class='producto'>
                        
                            <div class='imagen'>
                        ".
                            muestraImagen($mysqli, $res->imgFig)
                        ."
                            
                            </div>
                            <div class='nombre'>
                                $res->nombreFig            
                            </div>
                            <div class='descripcion'>
                                $res->decFigura
                            </div>
                            <div class='precio'>
                                $res->precioFigura
                            </div>
                            <div class='compra'>



                            </div>
                        
                        </div>
                    
                    ";

                }
                

            ?>

        </div>
        <div class="carrito">

            

        </div>

    </main>
</body>
</html>