<?php

class Factura{

    const IVA = 0.21;
    private $importeBase;
    private $fecha;
    private $impuestos;
    private $importeBruto;
    private $estado;
    private $estadoString;

    public function __construct($importeBase, $fecha, $impuestos, $importeBruto, $estado = false){

        $this->importeBase = $importeBase;
        $this->fecha = $fecha;
        $this->impuestos = $impuestos;
        $this->importeBruto = $importeBruto;
        $this->estado = $estado;
        
    }

    public function __toString()
    {
        return "<p>Importe Base: $this->importeBase <br>
                Fecha: $this->fecha <br>
                Impuestos: $this->impuestos <br>
                Importe Bruto: $this->importeBruto <br>
                Estado: " . $this->escribeEstado() . " </p>";
    }

    private function escribeEstado(){

        if($this->estado == true){

            return "Pagado";

        }else{

            return "Pendiente";

        }

    }

    public function getImporteBase(){

        return $this->importeBase;

    }

    public function setImporteBase($importeBase){

        $this->importeBase = $importeBase;

    }

    
    public function getFecha(){

        return $this->fecha;

    }

    public function setFecha($fecha){

        $this->fecha = $fecha;

    }
    
    public function getImpuestos(){

        return $this->impuestos;

    }

    public function setImpuestos($impuestos){

        $this->impuestos = $impuestos;

    }
    
    public function getImporteBruto(){

        return $this->importeBruto;

    }

    public function setImporteBruto($importeBruto){

        $this->importeBruto = $importeBruto;

    }
    
    public function getEstado(){

        return $this->estado;

    }

    public function setEstado($estado){

        $this->estado = $estado;

    }
}

?>