<?php

class Empleado{
 
    private $nombre;
    private $sueldo;
    
    
    public function __construct($nombre, $sueldo){
        
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;

    }

    public function muestraImpuesto(){

        echo "
        
            Nombre: $this->nombre <br>
        
        ";

        if($this->sueldo > 3000){

            return true;

        }else{

            return false;

        }

    }

    public function getNombre(){

        return $this->nombre;

    }

    public function getSueldo(){

        return $this->sueldo;

    }

    public function setNombre($nombre){

        return $this->nombre = $nombre;

    }
    
    public function setSueldo($sueldo){

        return $this->sueldo = $sueldo;

    }

    

}

?>