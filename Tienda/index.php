<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require './app/Conexion.php';

$frikytienda = new Conexion('frikyAdmin', '123456', 'frikytienda');
$mysqli = new mysqli('localhost', 'frikyAdmin', '123456', 'frikytienda');

/*$consultaCookie = $mysqli->query("SELECT idFig FROM figura");
$resCookie = $consultaCookie->fetch_object();



while($resCookie != NULL){

    if(!isset($cantidad["$resCookie->idFig"])){

        $cantidad["$rescookie->idFig"] = 0;
    
    }else{

        if(isset($_POST["$resCookie->idFig"])){

            $cantidad["$resCookie->idFig"]++;

            if(!isset($_COOKIE["$resCookie->idFig"])){
    
                setcookie($resCookie->idFig, $cantidad["$rescookie->idFig"], time()*3600*24*7);
        
            }else{

                $_COOKIE["$resCookie->idFig"]++;

            }
        }

    }
    
    $resCookie = $consultaCookie->fetch_object();

}*/


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    
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

                                <input type='button' name='$res->idFig' value='Comprar'>

                            </div>
                        
                        </div>
                    
                    ";

                    $res = $consulta->fetch_object();

                }
                

            ?>

        </div>
        <div class="carrito">

            <?php

                /*$consultaCookie = $mysqli->query("SELECT idFig FROM figura");
                $resCookie = $consultaCookie->fetch_object();

                while($resCookie != NULL){

                    echo $_COOKIE["$resCookie->idFig"] , '<br>';
                    
                    $resCookie = $consultaCookie->fetch_object();

                }*/

            ?>

        </div>

    </main>
</body>
</html>