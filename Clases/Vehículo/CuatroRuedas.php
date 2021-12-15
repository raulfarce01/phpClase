<?php

class CuatroRuedas extends Vehiculo{

    private $numPuertas;

    public function __construct($color, $peso, $numPuertas){
        
        parent::__construct($color, $peso);
        $this->numPuertas = $numPuertas;

    }

    public function repintar($color){

        parent::setColor($color);

        echo "Color pintado a $color";

    }

    public function getNumPuertas(){

        return $this->numPuertas;

    }

    public function setNumPuertas($numPuertas){

        $this->numPuertas = $numPuertas;

    }

    public function __destruct(){
        
        parent::__destruct();
        unset($numPuertas);

    }
}

?>