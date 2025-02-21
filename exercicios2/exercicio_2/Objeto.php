<?php

    require_once "Triangulo.php";
    require_once "Retangulo.php";

    class Objeto{

        public $largura;
        public $altura;
        public $resultado;

        public function __construct($largura, $altura){
            $this->largura = $largura;
            $this->altura = $altura;
        }

        public function Area($largura, $altura){

            $resultado = $largura * $altura;
            return $resultado;
            echo $resultado .PHP_EOL;

        }

    }