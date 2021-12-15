<?php

class DosRuedas extends Vehiculo{

    private $cilindrada;

    public function __construct($color, $peso, $cilindrada){

        $this->cilindrada = $cilindrada;
        parent::__construct($color, $peso);
        
    }

    public function ponerGasolina($litros){

        echo "<p>Añadiendo gasolina...<br>";
        echo "Añadidos $litros litros de gasolina.</p>";

    }

    public function getCilindrada(){

        return $this->cilindrada;

    }

    public function setCilindrada($cilindrada){

        $this->cilindrada = $cilindrada;

    }

    public function __destruct(){
        
        parent::__destruct();
        unset($cilindrada);

    }
}

?>