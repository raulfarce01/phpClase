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
        
        $this->db = new mysqli($dir, $dbUser, $dbPasswd, $dbName);

    }

    public function closeConex(){

        $this->db->close();

    }

    //
    //@param $tabla contiene un String donde almacenamos la tabla en la que queremos hacer el select
    //@param $campos contiene un Arrray donde se guardan los campos que queremos mostrar en la consulta
    //@param $cond es un String que contiene la condición que queremos aplicar al select
    //@param $valor es un String o Entero que almacena el valor de la condición de la consulta
    //
    //Función para realizar consultas a una sola tabla
    public function createSelectSimple($tabla, $campos, $cond = "", $valor = ""){

        //SELECT campos FROM tabla WHERE codigo = valor

        $camposDepurados = implode(", ", $campos);

        if($cond == "" || $valor == ""){

            if($cond == "" && $valor = ""){

                $this->db->query("SELECT $camposDepurados FROM $tabla");

            }else if($cond == "" && $valor != ""){

                echo '<p>!!!No has insertado el valor de la condición del elemento que quiere cambiar en la tabla!!!</p>';

            }else if($cond != "" && $valor == ""){

                echo '<p>!!!No has insertado el parámetro de la condición cuyo elemento quieres cambiar!!!</p>';

            }

        }else{

            if(is_nan($cond)){

            $this->db->query("SELECT $camposDepurados FROM $tabla WHERE $cond = '$valor'");

            }else{

                $this->db->query("SELECT $camposDepurados FROM $tabla WHERE $cond = $valor");
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

        $valoresDepurados = implode(", ", $valores);

        $this->db->query("INSERT INTO $tabla VALUES ($valoresDepurados)");

    }

    //@see function createSelectSimple
    //
    //Función para borrar registros de una tabla
    public function deleteData($tabla, $cond, $valor){

        //DELETE FROM tabla WHERE condicion = valor

        if(is_nan($valor)){

            $this->db->query("DELETE FROM $tabla WHERE $cond = '$valor'");

        }else{

            $this->db->query("DELETE FROM $tabla WHERE $cond = $valor");

        }

    }

    //
    //@see function createSelectSimple
    //@param $valorUpdate es un Array que almacena el valor de los campos a modificar
    //
    //Función para hacer UPDATEs de tablas
    public function updateData($tabla, $cond, $valor, $campos, $valorUpdate){

        //UPDATE tabla SET campo1 = valor1, $campo2 = valor2, ... WHERE cond = valor

        if(count($campos) != count($valorUpdate)){

            if(is_nan($valor)){

                $this->db->query("UPDATE $tabla SET $this->separaCampos($campos, $valorUpdate) WHERE $cond = '$valor'");

            }else{

                $this->db->query("UPDATE $tabla SET $this->separaCampos($campos, $valorUpdate) WHERE $cond = $valor");

            }

        }
    }

    //
    //@param $campos contiene un Array con los campos a modificar
    //@param $valores contiene un Array con los valores de los campos
    //
    //Función para convertir 2 Arrays en una cadena de texto con formato "campo1 = valor1, campo2 = valor2, ..."
    public function separaCampos($campos, $valores){

        $cadena = "";

        for($i = 0; $i < count($campos); $i++){

            $cadena .= $campos[$i] . ' = ' . $valores[$i] . ', ';

        }

        return $cadena;

    }

}

?>