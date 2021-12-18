<?php

class Racional{

    private $racional;

    public function __construct($racional = "1/1"){

        $this->racional = $racional;
        
    }

    public function __toString()
    {
        
        return "<p>$this->racional</p>";

    }

    public function getRacional(){

        return $this->racional;

    }

    public function setRacional($racional){

        $this->num1 = $racional;

    }

}

?>