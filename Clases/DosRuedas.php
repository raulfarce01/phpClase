<?php

class DosRuedas extends Vehiculo{

    private $cilindrada;

    public function __construct($color, $peso, $cilindrada){

        $this->$cilindrada = $cilindrada;
        parent::setPeso($peso);
        parent::setColor($color);
        
    }

    public function ponerGasolina($litros){

        echo "<p>Añadiendo gasolina...<br>";
        echo "Añadidos $litros de gasolina.</p>";

    }

    public function getCilindrada(){

        return self::$cilindrada;

    }

    public function setCilindrada($cilindrada){

        $this.$cilindrada = $cilindrada;

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
        unset($cilindrada);

    }
}

?>