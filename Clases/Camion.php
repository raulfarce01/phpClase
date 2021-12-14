<?php

class Camion extends CuatroRuedas{

    private $longitud;

    public function __construct($color, $peso, $numPuertas, $longitud){

        $this->longitud = $longitud;
        parent::__construct($color, $peso, $numPuertas);
        
    }

    public function añadirRemolque($longRemolque){

        echo "<p> Remolque Añadido <br>";

    }

    public function getLongitud(){

        return $this->longitud;

    }

    public function setLongitud($longitud){

        $this->longitud = $longitud;

    }

    public function __destruct(){
            
        parent::__destruct();
        unset($longitud);

    }
}

?>