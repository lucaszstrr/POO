<?php

    require_once "Objeto.php";

    class Triangulo extends Objeto{

        public $tipo;
        public $resultado;

        public function Area($largura, $altura){

            $resultado = ($largura * $altura) / 2;
            return $resultado;
            echo $resultado .PHP_EOL;

        }

    }