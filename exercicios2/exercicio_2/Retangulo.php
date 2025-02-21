<?php

    require_once "Objeto.php";

    class Retangulo extends Objeto{

        public $resultado;

        public function Verificacao($largura, $altura){

            if($largura == $altura){
                echo "Quadrado" . PHP_EOL;
                return true;
            }else{
                echo "Não é um quadrado" . PHP_EOL;
                return false;
            }

        }

        public function Area($largura, $altura){

            $resultado = $largura * $altura;
            return $resultado;
            echo $resultado .PHP_EOL;
            
        }

    }