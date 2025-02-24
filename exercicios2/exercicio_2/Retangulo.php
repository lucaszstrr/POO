<?php

    require_once "Objeto.php";

    class Retangulo extends Objeto{

        public function Verificacao(){

            if($this->largura == $this->altura){
                echo "Quadrado" . PHP_EOL;
            }else{
                echo "Não é um quadrado" . PHP_EOL;
            }

        }

        public function Area($largura, $altura){

            echo "A área do quadrilátero é de: " . $this->largura * $this->altura . PHP_EOL;

        }

    }