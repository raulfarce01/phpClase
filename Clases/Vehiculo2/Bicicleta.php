<?php

    class Bicicleta extends Vehiculo{

        public function __construct($kmRec)
        {
            
            parent::$kmTot += $kmRec;
            parent::$creados++;

        }

        public function anda(){

            echo 'Anda con la bici';

        }

        public function caballito(){

            echo 'Hace un caballito con la bici';

        }

    }

?>