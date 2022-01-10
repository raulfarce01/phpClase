<?php

class RacionalCompleto{

    private $num1, $num2;

    public function __construct($num1 = 1, $num2 = 1)
    {

        $this->num1 = $num1;
        $this->num2 = $num2;
        
    }

    public function __toString()
    {

        if(is_string($this->num1)){

            return "<p>$this->num1</p>";

        }else{
        
            return "<p>$this->num1 / $this->num2</p>";

        }
    }

    public function getNum1(){

        return $this->num1;

    }

    public function setNum1($num1){

        $this->num1 = $num1;

    }

    public function getNum2(){

        return $this->num2;

    }

    public function setNum2($num2){

        $this->num1 = $num2;

    }

}

?>