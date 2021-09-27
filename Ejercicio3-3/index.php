
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

            /** Escribe un programa en que dado un número del 1 a 7 escriba el correspondiente nombre del día
            de la semana. */
            
            $day = $_POST['day'];
            
            switch ($day) {
                case 1:
                    echo 'Lunes<br><br>';
                    break;
                
                case 2:
                    echo 'Martes<br><br>';
                    break;
                
                case 3:
                    echo 'Miércoles<br><br>';
                    break;
                
                case 4:
                    echo 'Jueves<br><br>';
                    break;
                
                case 5:
                    echo 'Viernes<br><br>';
                    break;

                case 6:
                    echo 'Sábado<br><br>';
                    break;

                case 7:
                    echo 'Domingo<br><br>';
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