<?php

/**
 * Class OperacionRacional
 * Realiza una operación racional
 */
class OperacionRacional extends Operacion{

    public function __construct($operacion) {
        parent::__construct($operacion);
    }

    /**
     * @param $fraccion
     * @return string
     * Simplifica la fraccion pasada por parametro, utilizando el mcd
     */
    // TODO: Completa el método
    public function simplifica($fraccion){

        // 1. - Separamos los operandos de una fracción
        $operandos = preg_split('/\//',$fraccion);
        $op1 = $operandos[0];
        $op2 = $operandos[1];
        $op1Final = 0;
        $op2Final = 0;

        // 2. - Calculamos el mcd 
        for($i = $op1; $i >= 0; $i--){
            for($j = $op2; $j >= 0; $j--){

                if($op1 % $i == 0){
                    if($op2 % $j == 0){

                        $op1Final = $op1/$i;
                        $op2Final = $op2/$j;

                    }
                }

            }
        }

        // 3. - Devolvemos el resultado
        return "$op1Final / $op2Final";
        
    }

    /**
     * @param OperacionRacional $objeto
     * @return string
     * Separa los operandos para crear con ellos 2 objetos fraccion Racional
     * Y se encarga de llamar a la funcion necesaria para sumar,restar,etc.
     */
    // TODO: Implementa el método
    public function operacionRacional(OperacionRacional $objeto){

        // 1. - Separa los operandos de la operación entre fracciones
        $operando1 = preg_split('/\//',$this->operando1);
        $operando2 = preg_split('/\//',$this->operando2);

        // 2. - Crea los dos racionales con los operandos obtenidos
        $rac1 = new Racional($operando1[0], $operando1[1]);
        $rac2 = new Racional($operando2[0], $operando2[1]);

        // 3. - Comprueba el operador, realiza el calculo que corresponda y devuelve el resultado
        if($objeto->getOperador() == "+"){

            $rac1->suma($rac2);

        }else if($objeto->getOperador() == "-"){

            $rac1->resta($rac2);

        }else if($objeto->getOperador() == "*"){

            $rac1->multiplicar($rac2);

        }else if($objeto->getOperador() == ":"){

            $rac1->dividir($rac2);

        }

        // PISTA:
        // - Tanto al separar operandos como al obtener el operador, 
        //   es muy importante el uso de getters.
    }
}
?>