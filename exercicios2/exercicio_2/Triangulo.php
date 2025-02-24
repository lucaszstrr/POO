<?php

    require_once "Objeto.php";

    class Triangulo extends Objeto{

        public $tipo;

        public function __construct($largura, $altura, $tipo){
            parent::__construct($largura, $altura);
            $this->tipo = $tipo;
        }

        public function TipoTriangulo(){

            if($this->tipo === 'retangulo'){
                echo "A área do triângulo retangulo é de: " . ($this->largura * $this->altura) / 2 . PHP_EOL;
            }elseif($this->tipo === 'equilatero'){
                echo "A área do triângulo equilatero é de: " . (($this->largura ** 2) * 1.73 / 4) . PHP_EOL;
            }elseif($this->tipo === 'escaleno'){
                echo "A área do triângulo escaleno é de: " . ($this->largura * $this->altura) / 2 . PHP_EOL;
            }

        }

    }