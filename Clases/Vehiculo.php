<?php

class Vehiculo{

    private $color;
    private $peso;

    public function __construct($color, $peso){
       
        $this->$color = $color;
        $this->$peso = $peso;

    }

    public function circula($objeto){

        echo "<p>Circulando " . gettype($objeto) . "</p>";

    }

    public function añadirPersona($pesoPersona){

        echo "<p>Añadida una persona de $pesoPersona kg</p>";

    }

    public function setColor($color){

        $this->$color = $color;

    }

    public function getColor(){

        return self::$color;

    }

    public function setPeso($peso){

        $this->$peso = $peso;

    }

    function getPeso(){

        return self::$peso;

    }

    public function __destruct(){
        
        unset($color);
        unset($peso);

    }

}

?>