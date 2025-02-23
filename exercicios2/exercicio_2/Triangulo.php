<?php

    require_once "Objeto.php";

    class Triangulo extends Objeto{

        public $tipo;

        public function __construct($largura, $altura, $tipo){
            parent::__construct($largura, $altura);
            $this->tipo = $tipo;
        }


        public function Area(){
            return ($this->largura * $this->altura) / 2;
        }

    }