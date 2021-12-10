<?php

class CuatroRuedas extends Vehiculo{

    private $numPuertas;

    public function __construct($color, $peso, $numPuertas){
        
        parent::setColor($color);
        parent::setPeso($peso);
        $this->$numPuertas = $numPuertas;

    }

    public function repintar($color){

        parent::setColor($color);

        echo "Color pintado a $color";

    }

    public function getNumPuertas(){

        return self::$numPuertas;

    }

    public function setNumPuertas($numPuertas){

        $this->$numPuertas = $numPuertas;

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
        unset($numPuertas);

    }
}

?>