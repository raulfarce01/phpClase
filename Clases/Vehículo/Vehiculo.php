<?php

class Vehiculo{

    private $color;
    private $peso;

    public function __construct($color, $peso){
       
        $this->color = $color;
        $this->peso = $peso;

    }

    public function circula($objeto){

        echo "<p>Circulando " . get_class($objeto) . "</p>";

    }

    public function añadirPersona($pesoPersona){

        echo "<p>Añadida una persona de $pesoPersona kg</p>";

    }

    public function setColor($color){

        $this->color = $color;

    }

    public function getColor(){

        return $this->color;

    }

    public function setPeso($peso){

        $this->peso = $peso;

    }

    function getPeso(){

        return $this->peso;

    }

    public function __destruct(){
        
        unset($color);
        unset($peso);

    }

}

?>