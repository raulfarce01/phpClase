<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexión a Base de Datos</title>
</head>

<body>

    <?php

        //Iniciamos la conexión con la base de datos
        $dwes = new PDO('mysql:host=localhost; dbname=dwes', 'dwes', 'abc123');

        //Usamos esta variable para realizar con éxito la transacción
        $ok = true;

        //comenzamos la transacción para no hacer autocommit
        $dwes->beginTransaction();

        //$update = $dwes->exec("UPDATE stock SET unidades = 1 WHERE tienda = 1 AND producto = 'PAPYRE62GB'");
        
        //Comprobamos que se pueda realizar el update
        if($dwes->exec("UPDATE stock SET unidades = 1 WHERE tienda = 1 AND producto = 'PAPYRE62GB';")){

            $filas = $dwes->exec("UPDATE stock SET unidades = 1 WHERE tienda = 1 AND producto = 'PAPYRE62GB';");
            echo "$filas registros afectados";

        }else{
            $ok = false;
        }

        //$insert = $dwes->prepare("INSERT INTO stock VALUES ('PAPYRE62GB', 2, 1)");

       if($dwes->exec("INSERT INTO stock VALUES ('PAPYRE62GB', 2, 1)")){

            $filas = $dwes->exec("INSERT INTO stock VALUES ('PAPYRE62GB', 2, 1)");
            echo "$filas registros afectados";

        }else{
            $ok = false;
        }
        
        $ok ? $dwes->commit() : $dwes->rollBack();

    ?>

</body>

</html>