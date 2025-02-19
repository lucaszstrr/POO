<?php

    class Universidade{

        public $nomeUniversidade;

        public function __construct($nomeUniversidade){
            $this->nomeUniversidade = $nomeUniversidade;
        }

        public function nomeUniversidade(){

            return $this->nomeUniversidade;
         
        }


    }
