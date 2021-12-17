<?php

class CuatroRuedas extends Vehiculo{

    private $numPuertas;

    public function __construct($color, $peso, $numPuertas){
        
        $this->color = $color;
        $this->peso = $peso;
        $this->numPuertas = $numPuertas;

    }

    public function añadirPersona($pesoPersona){

        echo "<p>Añadida una persona de $pesoPersona kg</p>";

        $this->peso += $pesoPersona;

        echo "<p>Ahora el vehículo pesa $this->peso</p>";
        
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