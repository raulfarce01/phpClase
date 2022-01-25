<?php

class Conexion{

    private $db;

    public function openConex($bdUser, $bdPasswd, $bdName, $dir = 'localhost'){

        $this->db = new mysqli($dir, $bdUser, $bdPasswd, $bdName);

    }

    public function closeConex(){

        $this->db->close();

    }

    public function createSelect($tabla, $campos, $cond = "", $idCond = ""){

        //SELECT campos FROM tabla WHERE codigo = valor

        $camposDepurados = implode(", ", $campos);

        if($cond == "" || $idCond == ""){

            $this->db->query("SELECT $camposDepurados FROM $tabla");

        }else{

            if(is_nan($cond)){

            $this->db->query("SELECT $camposDepurados FROM $tabla WHERE $idCond = '$cond'");

            }else{

                $this->db->query("SELECT $camposDepurados FROM $tabla WHERE $idCond = $cond");
            }

        }

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

                for($i = 0; $i < count($campos); $i++){
                    
                    

                }

            }else{



            }

        }
    }

}

?>