<?php

    class Coche extends Vehiculo{


        public function __construct($kmRec)
        {
            
            parent::$kmTot += $kmRec;
            parent::$creados++;

        }

        public function anda(){

            echo 'Anda con el coche';

        }

        public function quema(){

            echo 'Quema rueda con el coche';

        }

    }

?>