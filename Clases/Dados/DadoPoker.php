<?php

    class DadoPoker{

        private $resTirada = [];
        private $numDados;
        private static $tiradasTotales;

        public function __construct($numDados)
        {
            
            if($numDados <= 5 && $numDados >= 1){

                $this->numDados = $numDados;

            }else{

                echo '<p>Mete entre 1 y 5 dados</p>';
            }

        }

        public function __destruct()
        {
            
            unset($this->numDados);

        }

        public function __toString()
        {
            
            return "Número de dados: $this->numDados <br>
                    Tiradas totales: " . self::$tiradasTotales;
        }

        public function tira(){

            $cara = 0;

            for($i = 0; $i < $this->numDados; $i++){

                $cara = rand(0, 5);

                $this->nombreFigura($cara, $i);

            }

            self::$tiradasTotales += $this->numDados;

            return $this->resTirada;
        }

        public function nombreFigura($cara, $i){

            if ($cara == 0){

                $this->resTirada[$i] = "As";

            }else if($cara == 1){

                $this->resTirada[$i] = "J";

            }else if($cara == 2){

                $this->resTirada[$i] = "Q";

            }else if($cara == 3){

                $this->resTirada[$i] = "K";

            }else if($cara == 4){

                $this->resTirada[$i] = "7";

            }else if($cara == 5){

                $this->resTirada[$i] = "8";
                
            }

        }

        public function getTiradasTotales(){
            
            return self::$tiradasTotales;

        }

        public function muestraResultado(){

            $numTirada = 0;

            foreach($this->resTirada as $tirada){

                echo "Tirada $numTirada -> $tirada <br>";

                $numTirada++;

            }

        }

    }

?>