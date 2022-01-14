<?php
class Racional extends OperacionRacional{

    private $num;
    private $den;

    /**
     * Racional constructor.
     * @param $num
     * @param $den
     * Si el denominador esta vacio, dependiendo del valor de num dara un valor u otro.
     */
    // TODO: Implementa el constructor 
    public function __construct($num = 1, $den = 1){
        
        $this->num = $num;
        $this->den = $den;

    }

    /**
     * @param Racional $b
     * @return string
     * Calcula la suma de dos fracciones
     */
    // TODO: Completa el método
    public function suma (Racional $b) {
        $resultado = new Racional();
        $numFinal = 0;
        // Si ambos denominadores son iguales
        if ($this->getDen() == $b->getDen() ){
            // 1. - Calcular numerador
            $numFinal = $this->getNum() + $b->getNum();

            // 2. - Calcular denominador
            
            // 3. - Crear un nuevo racional
            $resultado->setNum($numFinal);
            $resultado->setDen($this->getDen());
        
            // 4. - Devolver el resultado 
            return $resultado;

        } else{
            // 1. - Calcular denominador
            $resultado->setDen($this->getDen()*$b->getDen());

            //2. - Calcular numerador
            $numFinal = ($this->getNum()*$b->getDen())+$b->getNum();
            $resultado->setNum($numFinal);
                    
            // 3. - Devolver el resultado 
            return $resultado; 
        }

    }

    /**
     * @param Racional $b
     * @return string
     * Calcula la resta de dos fracciones
     */
    // TODO: Implementa el método
    public function resta (Racional $b){
        $resultado = new Racional();
        $numFinal = 0;
        // Si ambos denominadores son iguales
        if ($this->getDen() == $b->getDen() ){
            // 1. - Calcular numerador
            $numFinal = $this->getNum() - $b->getNum();

            // 2. - Calcular denominador
            
            // 3. - Crear un nuevo racional
            $resultado->setNum($numFinal);
            $resultado->setDen($this->getDen());
        
            // 4. - Devolver el resultado 
            return $resultado;

        } else{
            // 1. - Calcular denominador
            $resultado->setDen($this->getDen()*$b->getDen());

            //2. - Calcular numerador
            $numFinal = ($this->getNum()*$b->getDen())-$b->getNum();
            $resultado->setNum($numFinal);
                    
            // 3. - Devolver el resultado 
            return $resultado; 
        }
    }

    /**
     * @param Racional $b
     * @return string
     * Calcula la multiplicacion de dos fracciones
     */
    // TODO: Implementa el método
    public function multiplicar (Racional $b){
        $resultado = new Racional();
        $numFinal = 0;
        $denFinal = 0;

            // 1. - Calcular numerador
            $numFinal = $this->getNum() * $b->getNum();

            // 2. - Calcular denominador
            $denFinal = $this->getDen() * $b->getDen();

            // 3. - Crear un nuevo racional
            $resultado->setNum($numFinal);
            $resultado->setDen($denFinal);
        
            // 4. - Devolver el resultado 
            return $resultado;
    }

    /**
     * @param Racional $b
     * @return string
     * Calcula la division de dos fracciones
     */
    // TODO: Implementa el método
    public function dividir (Racional $b){
        $resultado = new Racional();
        $numFinal = 0;
        $denFinal = 0;
        
            // 1. - Calcular numerador
            $numFinal = $this->getNum() * $b->getDen();

            // 2. - Calcular denominador
            $denFinal = $this->getDen() * $b->getNum();

            // 3. - Crear un nuevo racional
            $resultado->setNum($numFinal);
            $resultado->setDen($denFinal);
        
            // 4. - Devolver el resultado 
            return $resultado;

    }

    /**
     * @return mixed
     * Getters y Setters
     */

    public function getNum(){
        return $this->num;
    }

    public function getDen(){
        return $this->den;
    }

    public function setNum($num){
        $this->num = $num;
    }

    public function setDen($den){
        $this->den = $den;
    }

}
?>