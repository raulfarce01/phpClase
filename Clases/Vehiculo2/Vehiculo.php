<?php

    abstract class Vehiculo{

        protected static $kmTot;
        protected static $creados;

        public function getKmTot(){

            return self::$kmTot;

        }

        public function getCreados(){

            return self::$creados;

        }

        public abstract function anda();

    }

?>