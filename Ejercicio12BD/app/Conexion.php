<?php

class Conexion{

    private $db;

    public function openConex($bdUser, $bdPasswd, $bdName, $dir = 'localhost'){

        $this->db = new mysqli($dir, $bdUser, $bdPasswd, $bdName);

    }

    public function closeConex(){

        $this->db->close();

    }

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

    public function createSelectJoin($tablas, $campos, $cond = "", $valor = ""){

        //SELECT campos FROM tabla1 t1 INNER JOIN tabla2 t2

        

    }

    public function insertData($tabla, $valores){

        //INSERT INTO tabla VALUES (valor1, valor2, ...)

        $valoresDepurados = implode(", ", $valores);

        $this->db->query("INSERT INTO $tabla VALUES ($valoresDepurados)");

    }

    public function deleteData($tabla, $cond, $valor){

        //DELETE FROM tabla WHERE condicion = valor

        if(is_nan($valor)){

            $this->db->query("DELETE FROM $tabla WHERE $cond = '$valor'");

        }else{

            $this->db->query("DELETE FROM $tabla WHERE $cond = $valor");

        }

    }

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

    public function separaCampos($campos, $valores){

        $cadena = "";

        for($i = 0; $i < count($campos); $i++){

            $cadena .= $campos[$i] . ' = ' . $valores[$i];

        }

        return $cadena;

    }

}

?>