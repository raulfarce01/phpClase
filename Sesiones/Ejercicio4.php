<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <?php

        /*Establece un control de acceso mediante nombre de usuario y contraseña para cualquiera de los
        programas de la relación anterior. La aplicación no nos dejará continuar hasta que iniciemos sesión
        con un nombre de usuario y contraseña correctos.*/

        const user = array('usuario' => 'Neiroh', 'password' => '123456');

        if(session_id() == ""){
            session_start();
        }

        if(!isset($userEntra) && !isset($passEntra)){

            echo '
            
                

            ';

        }

    ?>

</body>
</html>