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
        
            $nota1 = $_POST['nota1'];
            $nota2 = $_POST['nota2'];
            $nota3 = $_POST['nota3'];
            $media = ($nota1 + $nota2 + $nota3) / 3;
            
            echo 'Tu nota en el boletín es un: ';

            if($media >= 1 && $media < 5){
                echo 'Insuficiente';
            }else if($media >= 5 && $media < 6){
                echo 'Suficiente';
            }else if($media >= 6 && $media < 7){
                echo 'Bien';
            }else if($media >= 7 && $media < 9){
                echo 'Notable';
            }else if($media >= 9 && $media <= 10){
                echo 'Sobresaliente';
            }else{
                echo 'Nota inválida';
            }
        
        ?>
    </body>
</html>
