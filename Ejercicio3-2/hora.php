<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            $hora = $_POST['hora'];
            
            if($hora >= 6 && $hora < 12){
                
                echo 'Buenos días';
                
            }else if($hora >= 12 && $hora < 20){
                
                echo 'Buenas tardes';
            
            }else if(($hora >= 20 && $hora < 24) || ($hora >= 0 && $hora < 6)){
                
                echo 'Buenas noches';
                
            }else{
                
                echo 'Hora incorrecta';
                
            }
        
        ?>
    </body>
</html>
