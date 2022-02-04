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
                
        //echo $_POST['nombre'].", ".$_POST['desc'].", ".$_POST['precio'];
        //echo "INSERT INTO figura (nombreFig, descFig, precioFig, fotoFig) VALUES (".$_POST['nombre'].", ".$_POST['desc'].", ".$_POST['precio'].", '$imgContent')";
        //Insert image content into database
        $insert = $db->query("INSERT INTO figura (nombreFig, descFig, precioFig, fotoFig) VALUES (".$_POST['nombre'].", ".$_POST['desc'].", ".$_POST['precio'].", '$imgContent')");
        if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 

    }else{
        echo "Please select an image file to upload.";
    }
}
?>