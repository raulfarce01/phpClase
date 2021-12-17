<?php

class Camion extends CuatroRuedas{

    private $longitud;

    public function __construct($color, $peso, $numPuertas, $longitud){

        $this->longitud = $longitud;
        parent::__construct($color, $peso, $numPuertas);
        
    }

    public function añadirRemolque($longRemolque){

        echo "<p> Remolque Añadido de $longRemolque<br>";

        $this->longitud += $longRemolque;

        echo "Ahora el vehículo mide $this->longitud</p>";

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