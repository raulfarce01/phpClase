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
        $dbUsername = 'frikytienda';
        $dbPassword = '123456'; // Change password
        $dbName     = 'frikytienda';
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        $dataTime = date("Y-m-d H:i:s");
        
        //Insert image content into database
        $insert = $db->query("INSERT into images (image) VALUES ('$imgContent')");
        if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 

        $idImg = $db->query("SELECT idImg FROM imagenprod WHERE cadenaImgen = '$imgContent'");
        $resImg = $idImg->fetch_array();

        echo $resImg['idImg'];
        $insert = $db->query("INSERT into figura (nombreFig, descFigura, precioFigura, imgFig) VALUES ('".$_POST['nombre']."', '".$_POST['desc']."', ". $_POST['precio'].", '".$resImg['idImg']."'");
        if($insert){
            echo "Figura uploaded successfully.";
        }else{
            echo "Figura upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
}
?>