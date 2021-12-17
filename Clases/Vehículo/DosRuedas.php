<?php

class DosRuedas extends Vehiculo{

    private $cilindrada;

    public function __construct($color, $peso, $cilindrada){

        $this->cilindrada = $cilindrada;
        $this->color = $color;
        $this->peso = $peso;
        
    }

    public function ponerGasolina($litros){

        echo "<p>Añadiendo gasolina...<br>";
        echo "Añadidos $litros litros de gasolina.</p>";

        $this->peso += $litros;

        echo "Ahora el vehículo pesa $this->peso";

    }

    public function añadirPersona($pesoPersona){

        echo "<p>Añadida una persona de $pesoPersona kg</p>";

        $this->peso += $pesoPersona + 2;

        echo "<p>Ahora el vehículo pesa $this->peso</p>";

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