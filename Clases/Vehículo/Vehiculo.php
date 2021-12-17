<?php

abstract class Vehiculo{

    private $color;
    private $peso;
    private static $numCambioColor = 0;    

    public function circula(){

        echo "<p>Circulando " . get_class($this) . "</p>";

    }
    
    public static function verAtributo($objeto){

        var_dump($objeto);

    }

    public function añadirPersona($pesoPersona){

        echo "<p>Añadida una persona de $pesoPersona kg</p>";

        $this->peso += $pesoPersona;

        echo "<p>Ahora el vehículo pesa $this->peso</p>";

    }

    public function setColor($color){

        $this->color = $color;
        self::$numCambioColor++;

    }

    public function getNumCambioColor(){

        return self::$numCambioColor;

    }

    public function repintar($color){

        $this->setColor($color);

        echo "<p>Color pintado a $this->color</p>";

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