<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="../index.php"><div class="boton"><p>Inicio</p></div></a>
<a href="../upload.php"><div class="boton try"><p>Subir otra imagen</p></div></a>
<?php
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        /*
         * Insert image data into database
         */
        
        //DB details
        $dbHost     = 'localhost';
        $dbUsername = 'frikyAdmin';
        $dbPassword = '123456'; // Change password
        $dbName     = 'frikytienda';
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
        // Check connection
        if($db->connect_error){
            die("Error al conectar: " . $db->connect_error);
        }
                
        //echo $_POST['nombre'].", ".$_POST['desc'].", ".$_POST['precio'];
        //echo "INSERT INTO figura (nombreFig, descFig, precioFig, fotoFig) VALUES (".$_POST['nombre'].", ".$_POST['desc'].", ".$_POST['precio'].", '$imgContent')";
        //Insert image content into database
        $insert = $db->query("INSERT INTO figura (nombreFig, descFig, precioFig, imgFig) VALUES ('".$_POST['nombre']."', '".$_POST['desc']."', ".$_POST['precio'].", '$imgContent')");
        if($insert){
            echo "<p>Archivo subido correctamente a la base de datos</p>";
        }else{
            echo "<p>Error al subir el archivo a la base de datos</p>";
        } 

    }else{
        echo "Selecciona un archivo para subir.";
    }
}
?>
</body>
</html>

