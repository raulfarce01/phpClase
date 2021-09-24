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
            
            $day = strtolower($_POST['day']);
            
            switch ($day) {
                case 'lunes':
                    echo 'DAPW<br><br>';
                    break;
                
                case 'martes':
                    echo 'DWES<br><br>';
                    break;
                
                case 'miercoles':
                    echo 'DWES<br><br>';
                    break;
                
                case 'jueves':
                    echo 'EIE<br><br>';
                    break;
                
                case 'viernes':
                    echo 'DWES<br><br>';
                    break;

                default: echo 'Valor Incorrecto <br><br>';
                    break;
            }

        ?>
        
        <form action="#" method="post">
            
            Día de la Semana: <input type="text" name="day"><br><br>
            
            <input type="submit" value="Enviar">            
            
        </form>
    </body>
</html>
