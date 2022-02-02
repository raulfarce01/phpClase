<?php

class Conexion{

    //Esta variable la vamos a utilizar para realizar los querys a la base de datos
    private $db;

    /*public function openConex($dbUser, $dbPasswd, $dbName, $dir = 'localhost'){

        $this->db = new mysqli($dir, $dbUser, $dbPasswd, $dbName);

    }*/

    //
    //@param $bdUser contiene un String con el usuario
    //@param $bdPasswd contiene un String con la contraseña del usuario con el que accederemos a la base de datos
    //@param $bdName contiene un String con el nombre de la base de datos
    //@param $dir contiene un string con la dirección ip en la que se encuentra la base de datos
    //
    //Función para conectarnos a una base de datos
    public function __construct($dbUser, $dbPasswd, $dbName, $dir = 'localhost'){

        //Creamos una conexión a la base de datos con el objeto mysqli
        $this->db = new mysqli($dir, $dbUser, $dbPasswd, $dbName);

        echo "Conexión iniciada correctamente en la base de datos: $dbName con el usuario $dbUser";

    }

    public function closeConex(){

        //Cerramos la conexión con la base de datos
        $this->db->close();

        echo '<p>Base de datos cerrada correctamente</p>';

    }

    //
    //@param $tabla contiene un String donde almacenamos la tabla en la que queremos hacer el select
    //@param $campos contiene un Arrray o un String donde se guardan los campos que queremos mostrar en la consulta
    //@param $cond es un String que contiene la condición que queremos aplicar al select
    //@param $valor es un String o Entero que almacena el valor de la condición de la consulta
    //
    //Función para realizar consultas a una sola tabla
    public function createSelectSimple($tabla, $campos, $cond = "", $valor = NULL){

        //SELECT campos FROM tabla WHERE codigo = valor

        if(is_array($campos)){

            $camposDepurados = implode(", ", $campos);
            $contador = count($campos);

        }else{

            $camposDepurados = $campos;
            $cuentaCampos = explode(",", $campos);
            $contador = count($cuentaCampos);

        }

        //echo $contador;
        //echo $camposDepurados;
        //echo '<br>'. $valor;


        //Comprobamos que los valores no estén vacíos, en caso de estarlos, realizamos la consulta más simple
        if($cond == "" || $valor == ""){

            if($cond == "" && $valor == ""){

                $consulta = $this->db->query("SELECT $camposDepurados FROM $tabla");
                $almacen = $consulta->fetch_object();

                if($campos == '*'){

                    $consulta = $this->db->query("SELECT * FROM $tabla");
                    $cuentaCampos = mysqli_num_fields($consulta);
                    $almacen = $consulta->fetch_array();
                    
                    echo $cuentaCampos;
                    echo (count($almacen));

                    while($almacen != NULL){

                            echo "<p>";
                            for($i = 0; $i < $cuentaCampos; $i++){

                                if($i == $cuentaCampos - 1){

                                    echo "$almacen[$i]";
    
                                }else{
    
                                    echo "$almacen[$i], ";
    
                                }

                            }
                            echo "</p>";                  

                        $almacen = $consulta->fetch_array();


                    }

                }


            }else if($cond == "" && $valor != ""){

                echo '<p>!!!No has insertado el valor de la condición del elemento que quiere cambiar en la tabla!!!</p>';

            }else if($cond != "" && $valor == ""){

                echo '<p>!!!No has insertado el parámetro de la condición cuyo elemento quieres cambiar!!!</p>';

            }

        }else{

            if(is_string($valor)){


                //Comprobamos que el valor insertado sea o no un número para solucionar un posible problema con las comillas
                $consulta = $this->db->query("SELECT $camposDepurados FROM $tabla WHERE $cond = '$valor'");
                $mostrador = $consulta->fetch_array();

                while($mostrador != NULL){

                    echo "<p>";

                    for($i = 0; $i < $contador; $i++){

                        if($i == $contador - 1){

                            echo "$mostrador[$i]";

                        }else{

                            echo "$mostrador[$i], ";

                        }

                    }

                    echo "</p>";

                    $mostrador = $consulta->fetch_array();

                }
            
                

            }else{

                //Almacenamos la consulta en una variable
                $consulta = $this->db->query("SELECT $camposDepurados FROM $tabla WHERE $cond = $valor");
                $mostrador = $consulta->fetch_object();

                //Recorremos los resultados de la consulta y los mostramos
                while($mostrador != NULL){

                    echo "<p>";

                    for($i = 0; $i < $contador; $i++){

                        if($i == $contador - 1){

                            echo "$campos[$i]";

                        }else{

                            echo "$campos[$i], ";

                        }

                    }

                    echo "</p>";

                    $mostrador = $consulta->fetch_object();

                }
            }

        }

    }

    //
    //@param $tabla almacena un String con el nombre de la tabla a la que queremos insertar datos
    //@param $valores almacena un Array con los valores que queremos insertar en la tabla
    //
    //Función para introducir datos en la tabla
    public function insertData($tabla, $valores){

        //INSERT INTO tabla VALUES (valor1, valor2, ...)

        //Cambiamos el formato de array a una cadena de caracteres separados por comas que cuyos caracteres son los valores del array para poder realizar la operación en la base de datos
        $valoresDepurados = implode(", ", $valores);

        $this->db->query("INSERT INTO $tabla VALUES ($valoresDepurados)");

        /*$consulta = $this->db->query("SELECT * FROM $tabla");
        $nombreCampos = $consulta->fetch_object();*/

        echo "<p>Valores: $valoresDepurados insertados correctamente en la tabla $tabla</p>";

    }

    //
    //@see function createSelectSimple
    //
    //Función para borrar registros de una tabla
    public function deleteData($tabla, $cond, $valor){

        //DELETE FROM tabla WHERE condicion = valor

        //Comprobamos que el valor insertado sea o no un número para evitar posibles problemas con las comillas
        if(is_string($valor)){

            $this->db->query("DELETE FROM $tabla WHERE $cond = '$valor'");

            echo "<p>Registro $valor eliminado correctamente de la tabla</p>";

        }else{

            $this->db->query("DELETE FROM $tabla WHERE $cond = $valor");

            echo "<p>Registro $valor eliminado correctamente de la tabla</p>";

        }

    }

    //
    //@see function createSelectSimple
    //@param $valorUpdate es un Array que almacena el valor de los campos a modificar
    //
    //Función para hacer UPDATEs de tablas
    public function updateData($tabla, $cond, $valor, $campos, $valorUpdate){

        //UPDATE tabla SET campo1 = valor1, $campo2 = valor2, ... WHERE cond = valor

        //Nos aseguramos de que el número de valores introducidos sea el mismo para no generar ningún tipo de error

        if(!is_array($campos)){

            $camposArray = array($campos);

        }

        if(!is_array($valorUpdate)){

            $valorUpdateArray = array($valorUpdate);

        }

        if(count($camposArray) == count($valorUpdateArray)){

            //Los números y las comillas otra vez
            if(is_string($valor)){

                //@see function separaCampos
                $this->db->query('UPDATE ' . $tabla . ' SET ' . $this->separaCampos($camposArray, $valorUpdateArray) . ' WHERE ' . $cond . ' = ' . $valor);

                echo "<p>Valor: " . $this->separaCampos($camposArray, $valorUpdateArray) . "actualizados correctamente en la tabla $cond al registro $valor</p>";

            }else{

                //@see function separaCampos
                $this->db->query("UPDATE $tabla SET separaCampos($camposArray, $valorUpdateArray) WHERE $cond = $valor");

                echo "<p>Valor: $this->separaCampos($camposArray, $valorUpdateArray) actualizado correctamente en la tabla $cond al registro $valor</p>";

            }

        }else{

            echo "<p>La cantidad de campos y de valores no coincide</p>";

        }
    }

    //
    //@param $campos contiene un Array con los campos a modificar
    //@param $valores contiene un Array con los valores de los campos
    //
    //Función para convertir 2 Arrays en una cadena de texto con formato "campo1 = valor1, campo2 = valor2, ..."
    public function separaCampos($campos, $valores){

        $cadena = "";

        //Comprobamos que sea un array para no romper el programa al insertar una simple cadena de texto
        if(is_array($campos)){
            
            //Al ser array cambiamos el formato de los arrays a CAMPO1 = VALOR1, CAMPO2 = VALOR2
            for($i = 0; $i < count($campos); $i++){

                if($i = count($campos) - 1){

                    $cadena .= $campos[$i] . ' = ' . $valores[$i];

                }else{

                    $cadena .= $campos[$i] . ' = ' . $valores[$i] . ', ';

                }

            }

        }else{

            $cadena .= $campos . ' = ' . $valores;

        }

        return $cadena;

    }

}

?>