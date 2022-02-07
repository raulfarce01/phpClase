<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

$mysqli = new mysqli('localhost', 'frikyAdmin', '123456', 'frikytienda');

$consultaCookie = $mysqli->query("SELECT idFig FROM figura");
$resCookie = $consultaCookie->fetch_object();


while($resCookie !== NULL){

    if(!isset($cantidad["$resCookie->idFig"])){

        $cantidad["$resCookie->idFig"] = 0;
    
    }else{

        if(isset($_GET["cod"])){

            $cantidad["$resCookie->idFig"]++;

            if(!isset($_COOKIE["$resCookie->idFig"])){
    
                setcookie($resCookie->idFig, $cantidad["$rescookie->idFig"], time()*3600*24*7);
        
            }else{

                $_COOKIE["$resCookie->idFig"]++;

            }
        }

    }
    
    $resCookie = $consultaCookie->fetch_object();

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="./css/index.css" rel="stylesheet" type="text/css">
</head>
<body>
    
    <header>

        <h1>La Frikytienda</h1>

    </header>

    <nav>

        <a href="upload.php"><div class="boton">Añadir</div></a>
        <a href="modify.php"><div class="boton">Modificar</div></a>

    </nav>

    <main>

        <div class="productos">

            <?php

                $consulta = $mysqli->query("SELECT idFig, nombreFig, descFig, precioFig, fotoFig FROM figura");
                $res = $consulta->fetch_object();

                while($res != NULL){

                    echo "
                    
                        <div class='producto'>
                        
                            <div class='imagen'>
                                <img width='100' src='data:image/png;base64, ".base64_encode($res->fotoFig)."'></img>
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
";
?>
    <a href="./index.php?cod=<?php echo $res->idFig; ?>">Comprar</a>

                            </div>
                        
                        </div>
<?php
                    $res = $consulta->fetch_object();
                }
?>

        </div>
        <div class="carrito">

        <h2>Carrito</h2>

            <?php

                /*$consultaCookie = $mysqli->query("SELECT nombreFig, idFig FROM figura");
                $resCookie = $consultaCookie->fetch_object();

                while($resCookie != NULL){

                    if(isset($_COOKIE["resCookie->idFig"])){

                        echo $resCookie->nombreFig, ": ";
                        echo $_COOKIE["$resCookie->idFig"] , '<br>';
                        echo <input type="button" name="elimina" value="Eliminar">;

                    }
                    
                    $resCookie = $consultaCookie->fetch_object();

                }*/

            ?>

        </div>

    </main>
</body>
</html>