<?php

class Coche extends CuatroRuedas{

    private $numCadenasNieve;

    public function __construct($color, $peso, $numPuertas, $numCadenasNieve){

        $this->numCadenasNieve = $numCadenasNieve;
        parent::__construct($color, $peso, $numPuertas);
        
    }

    public function añadirCadenasNieve($num){

        echo "<p>$num cadenas de nieve añadidas.<br>";

        $this->numCadenasNieve += $num;

        echo "Ahora tienes " . $this->numCadenasNieve . ".</p>";

    }

    public function quitarCadenasNieve($num){


        //if($num <= $this->Coche::$numCadenasNieve){

            echo "<p>$num cadenas de nieve quitadas.<br>";
            $this->numCadenasNieve -= $num;
            echo "Ahora tienes " . $this->numCadenasNieve . ".</p>";

        //}else{

            //echo "<p>No tienes tantas cadenas de nieve, solo tienes " . self::$numCadenasNieve . "</p>";

        //}

        

    }

    public function añadirPersona($pesoPersona){

        parent::añadirPersona($pesoPersona);

        if($this->peso >= 1500 && $this->numCadenasNieve <= 3){
            echo "<p>ATENCIÓN!!! Ponga 4 cadenas para la nieve</p>";
        }

        
    }

    public function getCadenasNieve(){

        return $this->numCadenasNieve;

    }

    public function setCadenasNieve($numCadenasNieve){

        $this->numCadenasNieve = $numCadenasNieve;

    }

    public function setPeso($peso){

        if($this->peso > 2100){

            echo "<p>El peso no puede superar 2100kg</p>";

        }else{

            $this->setPeso($peso);

        }
    }

    public function __destruct(){
        
        parent::__destruct();
        unset($numCadenasNieve);

    }
}

?>