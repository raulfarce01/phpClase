<?php

class Coche extends CuatroRuedas{

    private $numCadenasNieve;

    public function __construct($color, $peso, $numPuertas, $numCadenasNieve){

        $this->$numCadenasNieve = $numCadenasNieve;
        parent::setColor($color);
        parent::setPeso($peso);
        parent::setNumPuertas($numPuertas);
        
    }

    public function añadirCadenasNieve($num){

        echo "<p>$num cadenas de nieve añadidas.<br>";

        self::$numCadenasNieve += $num;

        echo "Ahora tienes " . self::$numCadenasNieve . ".</p>";

    }

    public function quitarCadenasNieve($num){


        //if($num <= $this->Coche::$numCadenasNieve){

            echo "<p>$num cadenas de nieve quitadas.<br>";
            $this->Coche::$numCadenasNieve -= $num;
            echo "Ahora tienes " . self::$numCadenasNieve . ".</p>";

        //}else{

            //echo "<p>No tienes tantas cadenas de nieve, solo tienes " . self::$numCadenasNieve . "</p>";

        //}

        

    }

    public function getCadenasNieve(){

        return self::$numCadenasNieve;

    }

    public function setCadenasNieve($numCadenasNieve){

        $this.$numCadenasNieve = $numCadenasNieve;

    }

    public function setColor($color){

        parent::setColor($color);

    }

    public function getColor(){

        parent::getColor();

    }

    public function setPeso($peso){

        parent::setPeso($peso);

    }

    function getPeso(){

        parent::getPeso();

    }

    public function __destruct(){
        
        parent::__destruct();
        unset($numCadenasNieve);

    }
}

?>