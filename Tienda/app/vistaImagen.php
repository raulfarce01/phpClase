<?php
    function muestraImagen($db, $id){
    //Get image data from database
        $result = $db->query("SELECT cadenaImagen FROM imagenProd WHERE idImg = $id");
        
        if($result->num_rows > 0){
            $imgData = $result->fetch_assoc();
            
            //Render image
            header("Content-type: image/jpg"); 
            echo $imgData['cadenaImagen']; 
        }else{
            echo 'Image not found...';
        }
    }
?>