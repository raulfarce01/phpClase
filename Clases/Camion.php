<?php

class Camion extends CuatroRuedas{

    private $longitud;

    public function __construct($color, $peso, $numPuertas, $longitud){

        $this->$longitud = $longitud;
        parent::setNumPuertas($numPuertas);
        parent::setColor($color);
        parent::setPeso($peso);
        
    }

    public function añadirRemolque($longRemolque){

        echo "<p> Remolque Añadido <br>";

    }

    public function getLongitud(){

        return self::$longitud;

    }

    public function setLongitud($longitud){

        $this.$longitud = $longitud;

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
        unset($longitud);

    }
}

?>