<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        error_reporting(E_ALL);
        ini_set('display_errors', '1');

        /*
        Xizi ycm Iztizpbw ami lmdcmsbw lmjmzia pubmzxzmbiz ms dpssiukpkw "Si Tizptwzmui" ikwtxiviulwsw kwu ikwzlma lm *cpbizzi lcziubm cuw lm swa zmkzmwa ycm ycmliu. Am ikmxbi kwtw sc*iz: ms zmkzmw, ms lmxizbitmubw lm punwztibpki w ms icsi. Bwlw mssw xzmdpw idpaw xizi idpaiz is xcjspkw ycm mabm pubmzmailw. XOziuX
        */

        $ind = 19;
        $i = 0;
        $cadenaFinal = "";

        $cadena = "Xizi ycm Iztizpbw ami lmdcmsbw lmjmzia pubmzxzmbiz ms dpssiukpkw 'Si Tizptwzmui' ikwtxiviulwsw kwu ikwzlma lm *cpbizzi lcziubm cuw lm swa zmkzmwa ycm ycmliu. Am ikmxbi kwtw sc*iz: ms zmkzmw, ms lmxizbitmubw lm punwztibpki w ms icsi. Bwlw mssw xzmdpw idpaw xizi idpaiz is xcjspkw ycm mabm pubmzmailw. XOziuX";
        $cadena = strtolower($cadena);


        while($i < strlen($cadena)){

            /*if(substr($cadena, $i, 1) == "&aacute;" || substr($cadena, $i, 1) == "&eacute;" || substr($cadena, $i, 1) == "&iacute;" || substr($cadena, $i, 1) == "&oacute;" || substr($cadena, $i, 1) == "&uacute;"){

                echo 'ENTRAAAAAAAAAAAAAAAAAAAAAAA';

                if(substr($cadena, $i, 1) == "&aacute;"){

                    $cadenaFinal .= "&aacute;";

                }else if(substr($cadena, $i, 1) == "&eacute;"){

                    $cadenaFinal .= "&eacute;";

                }else if(substr($cadena, $i, 1) == "&iacute;"){

                    $cadenaFinal .= "&iacute;";

                }else if(substr($cadena, $i, 1) == "&oacute;"){

                    $cadenaFinal .= "&oacute;";

                }else if(substr($cadena, $i, 1) == "&uacute;"){

                    $cadenaFinal .= "&uacute;";

                }

            }else{*/
                
                if(substr($cadena, $i, 1) == " "){

                    $cadenaFinal .= " ";
    
                }else if(substr($cadena, $i, 1) == "."){

                    $cadenaFinal .= ".";

                }else if(substr($cadena, $i, 1) == ","){

                    $cadenaFinal .= ",";

                }else if(substr($cadena, $i, 1) == ":"){

                    $cadenaFinal .= ":";

                }else if(substr($cadena, $i, 1) == "'"){

                    $cadenaFinal .= "'";

                }else{
    
                    $letra = substr($cadena, $i, 1);
                    $letra = letraNum($letra, $ind);
                    $letra = numLetra($letra);
    
                    $cadenaFinal .= $letra;
    
                }

            //}

            

            $i++;

        }

        function letraNum($letra, $ind){

            $alfabetoMayus = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l" ,"m", "n", "*", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];

           // echo $letra . " -> ";

            for($i = 0; $i < count($alfabetoMayus); $i++){


                if($letra == $alfabetoMayus[$i]){

                    $letra = $i;
                    $letra += $ind;

                }

            }

            if($letra >= count($alfabetoMayus)){

                $letra = count($alfabetoMayus) - $letra;
                $letra = abs($letra);

            }

            //echo "$letra -> ";

            return $letra;

        }

        function numLetra($letra){

            $alfabetoMayus = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l" ,"m", "n", "*", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];

           // echo "$alfabetoMayus[$letra] <br>";

            return $alfabetoMayus[$letra];

        }

        /*while($i < strlen($cadena)){

            if(substr($cadena, $i, 1) == " "){

                $cadenaFinal .= " ";

            }else{

                $letra = ord(substr($cadena, $i, 0)) + $ind;
                $letra = chr($letra);
                $cadenaFinal .= $letra;

            }

            $i++;

        }*/

        $i = 0;

        while($i < strlen($cadena)){

            if($cadenaFinal[$i] == "*"){
                
                echo '&ntilde;';

            }else{

                echo $cadenaFinal[$i];

            }

            $i++;

        }
    ?>

</body>
</html>