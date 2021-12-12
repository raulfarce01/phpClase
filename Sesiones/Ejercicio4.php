<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./estilos.css">
</head>
<body>
    
    <?php

        /*Establece un control de acceso mediante nombre de usuario y contraseña para cualquiera de los
        programas de la relación anterior. La aplicación no nos dejará continuar hasta que iniciemos sesión
        con un nombre de usuario y contraseña correctos.*/

        //Variable de inicio de sesión
        const user = array('usuario' => 'Neiroh', 'password' => '123456');

        //Mostramos el formularo inicial
        if(!isset($_POST['userEntra']) && !isset($_POST['passEntra'])){

            echo '
            
                <h2>Inicio de Sesión</h2>

                <form action="#" method="post">
                
                    <p>
                        <label for="user">Usuario: </label>
                        <input type="text" name="userEntra" placeholder="Ejemplo00" autofocus>
                    </p>
                    <p>
                        <label for="passwd">Contraseña: </label>
                        <input type="password" name="passEntra">
                    </p>
                    <p>
                        <input type="submit" name="enviar" value="Enviar">
                    </p>
                
                </form>

            ';

        }else{

            $userEntra = $_POST['userEntra'];
            $passEntra = $_POST['passEntra'];

            //Comprobamos que los datos introducidos coinciden con el usuario
            if($userEntra == user['usuario']){

                if($passEntra == user['password']){

                    echo '
                    
                        Iniciando sesión...<br>
                        Sesión Iniciada.<br>
                        Saludos, ' . $userEntra . '<br>

                        <form action="#" method="post">
                            <input type="submit" name="logout" value="Cerrar Sesión">
                        </form>
                    
                    ';

                    if(session_id() == ""){
                        session_start();
                    }

                    if($_POST['logout']){

                        unset($userEntra);
                        unset($passEntra);

                        session_destroy();

                        echo 'Cerrando Sesión...<br>';
                        echo 'Sesión Cerrada<br>';

                    }

                //En caso de no hacerlo, mostramos un error y seguimos mostrando el formulario
                }else{

                    echo '
                    
                        <h2>Inicio de Sesión</h2>

                        <form action="#" method="post">
                        
                            <p>
                                <label for="user">Usuario: </label>
                                <input type="text" name="userEntra" placeholder="Ejemplo00" value="' . $userEntra . '">
                            </p>
                            <p>
                                <label for="passwd">Contraseña: </label>
                                <input type="password" name="passEntra" autofocus>
                                <span style="color: red;">Contraseña Incorrecta...</span>
                            </p>
                            <p>
                                <input type="submit" name="enviar" value="Enviar">
                            </p>
                        
                        </form>
                    
                    ';

                }

            }else{

                echo '
                    
                        <h2>Inicio de Sesión</h2>

                        <form action="#" method="post">
                        
                            <p>
                                <label for="user">Usuario: </label>
                                <input type="text" name="userEntra" placeholder="Ejemplo00" value="' . $userEntra . '"autofocus>
                                <span style="color: red;">Usuario Incorrecto</span>
                            </p>
                            
                            <p>
                                <label for="passwd">Contraseña: </label>
                                <input type="password" name="passEntra">
                            </p>
                            <p>
                                <input type="submit" name="enviar" value="Enviar">
                            </p>
                        
                        </form>
                    
                    ';

            }

        }

    ?>

</body>
</html>