<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ausencias</title>
</head>
<body>
    
    <?php 

        //MEDIO PIXEL DE PUNTO PARA EL EXAMEN AUNQUE SEA ;(
    
        //Esto lo he puesto porque los warnings me daban TOC, es lo que hay :v
        error_reporting(0);

        //Recogida de datos del formulario
        $lunes = $_POST['lunes'];
        $martes = $_POST['martes'];
        $miercoles = $_POST['miercoles'];
        $jueves = $_POST['jueves'];
        $viernes = $_POST['viernes'];
        $dwes = $_POST['dwes'];
        $dwec = $_POST['dwec'];
        $dapw = $_POST['dapw'];
        $diw = $_POST['diw'];
        $eie = $_POST['eie'];
        $claseLunes = $_POST['claseLunes'];
        $claseMartes = $_POST['claseMartes'];
        $claseMiercoles = $_POST['claseMiercoles'];
        $claseJueves = $_POST['claseJueves'];
        $claseViernes = $_POST['claseViernes'];

        //Variables auxiliares para ausencias(aus) y 
        //para las horas totales de la evaluación de cada asignatura(horas)
        $ausdwes = 0;
        $ausdwec = 0;
        $ausdwap = 0;
        $ausdiw = 0;
        $auseie = 0;
        $horasdwes = 0;
        $horasdwec = 0;
        $horasdapw = 0;
        $horasdiw = 0;
        $horaseie = 0;

        if(!isset($lunes) || !isset($martes) || !isset($miercoles) || !isset($jueves) || !isset($viernes) || !isset($dwes) || !isset($dwec) || !isset($dapw) || !isset($diw) || !isset($eie) || !isset($claseLunes) || !isset($claseMartes) || !isset($claseMiercoles) || !isset($claseJueves) || !isset($claseViernes)){
            echo 'Inserta los datos';
        }else{

            //En esta sección se calcula el número de horas de cada asignatura en la evaluación
            $horasdapw = $claseLunes*2 + $claseMiercoles*2 + $claseJueves;
            $horasdwes = $claseLunes*2 + $claseMartes*2 + $claseMiercoles*2 + $claseViernes*2;
            $horasdwec = $claseLunes*2 + $claseMartes*2 + $claseJueves*2;
            $horasdiw = $claseMiercoles + $claseMartes*2 + $claseJueves*2 + $claseViernes*3;
            $horaseie = $claseMiercoles + $claseJueves + $claseViernes;

            //En esta sección calculo el número de horas totales que he faltado de cada asignatura
            $ausdwes = $lunes*2 + $martes*2 + $miercoles*2 + $viernes*2 + $dwes;
            $ausdwec = $lunes*2 + $martes*2 + $jueves*2 + $dwec;
            $ausdapw = $lunes*2 + $miercoles*2 + $jueves + $dapw;
            $ausdiw = $jueves*2 + $martes*2 + $miercoles + $viernes*3 + $diw;
            $auseie = $jueves + $miercoles + $viernes + $eie;

            //En esta sección calculo el 20% de las horas totales para después
            //compararlas a las ausencias
            $horasdapw = (int)((20*$horasdapw)/100);
            $horasdwes = (int)((20*$horasdwes)/100);
            $horasdwec = (int)((20*$horasdwec)/100);
            $horasdiw = (int)((20*$horasdiw)/100);
            $horaseie = (int)((20*$horaseie)/100);

            if($ausdwes >= $horasdwes){

                echo 'Ya has faltado todas las veces posibles DWES <br>';

            }else{

                echo 'Puedes faltar ' , $horasdwes - $ausdwes , ' horas de DWES <br>';

            }
            if($ausdwec >= $horasdwec){

                echo 'Ya has faltado todas las veces posibles de DWEC <br>';

            }else{

                echo 'Puedes faltar ' , $horasdwec - $ausdwec , ' horas de DWEC <br>';

            }
            if($ausdapw >= $horasdapw){

                echo 'Ya has faltado todas las veces posibles de DAPW <br>';

            }else{

                echo 'Puedes faltar ' , $horasdapw - $ausdapw , ' horas de DAPW <br>';

            }
            if($ausdiw >= $horasdiw){

                echo 'Ya has faltado todas las veces posibles de DIW <br>';

            }else{

                echo 'Puedes faltar ' , $horasdiw - $ausdiw , ' horas de DIW <br>';

            }
            if($auseie >= $horaseie){

                echo 'Ya has faltado todas las veces posibles de EIE <br>';

            }else{

                echo 'Puedes faltar ' , $horaseie - $auseie , ' horas de EIE <br>';

            }
            
        }
    
    ?>

    <h2>Contador de Ausencias</h2>

    <form action="#" method="post">

    <p>
        <fieldset>

            <table>

                <legend>Ausencias Días Completos</legend>

                <tr>

                    <td>Lunes:</td>
                    <td><input type="number" name="lunes"></td>

                </tr>
                <tr>

                    <td>Martes:</td>
                    <td><input type="number" name="martes"></td>

                </tr>
                <tr>

                    <td>Miércoles:</td>
                    <td><input type="number" name="miercoles"></td>

                </tr>
                <tr>

                    <td>Jueves:</td>
                    <td><input type="number" name="jueves"></td>

                </tr>
                <tr>

                    <td>Viernes:</td>
                    <td><input type="number" name="viernes"></td>

                </tr>

            </table>

        </fieldset>
    </p>
    <p>
        <fieldset>

            <table>

                <legend>Ausencias Asignaturas Sueltas:</legend>

                <tr>

                    <td>DWES:</td>
                    <td><input type="number" name="dwes"></td>

                </tr>
                <tr>

                    <td>DWEC:</td>
                    <td><input type="number" name="dwec"></td>

                </tr>
                <tr>

                    <td>DAPW:</td>
                    <td><input type="number" name="dapw"></td>

                </tr>
                <tr>

                    <td>DIW:</td>
                    <td><input type="number" name="diw"></td>

                </tr>
                <tr>

                    <td>EIE:</td>
                    <td><input type="number" name="eie"></td>

                </tr>

            </table>

        </fieldset>
    </p>
    <p>
        <fieldset>

            <legend>Días de clase en la Evaluación</legend>

            <table>

                <tr>

                    <td>Lunes:</td>
                    <td><input type="number" name="claseLunes"></td>

                </tr>
                <tr>

                    <td>Martes:</td>
                    <td><input type="number" name="claseMartes"></td>
                    
                </tr>
                <tr>

                    <td>Miércoles:</td>
                    <td><input type="number" name="claseMiercoles"></td>
                    
                </tr>
                <tr>

                    <td>Jueves:</td>
                    <td><input type="number" name="claseJueves"></td>
                    
                </tr>
                <tr>

                    <td>Viernes:</td>
                    <td><input type="number" name="claseViernes"></td>
                    
                </tr>
            </table>

        </fieldset>
    </p>

    <input type="submit" value="Enviar">

    </form>

</body>
</html>