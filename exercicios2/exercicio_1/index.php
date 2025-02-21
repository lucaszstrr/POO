<?php

    class Funcionario{

        public $id;
        public $nome;
        public $cargo;
        public $salario;

        function __construct($id, $nome, $cargo){
            $this->id = $id;
            $this->nome = $nome;
            $this->cargo = $cargo;
        }

        public function calculaSalario(){

            if($this->cargo === 'auxiliar'){
                $salario = 2000;
                return $this->salario = $salario;
            }elseif($this->cargo === 'gerente'){
                $salario = 5000;
                return $this->salario = $salario;
            }

        }

        public function getSalario(){
            return $this->salario;
        }

    }

    class Gerente extends Funcionario{

        public $cargo;
        public $quantidadeDeColaboradores;
        public $salario;

        #[\Override]
        public function calculaSalario(){

            if($this->cargo === 'gerente'){
                $salario = 5000;
                return $salario;
            }

        }


    }

    $funcionario = new Funcionario(222, 'Funcionario', 'auxiliar');
    $funcionario->calculaSalario();
    echo "O salario do funcionário ". $funcionario->nome ." é de R$". $funcionario->salario . PHP_EOL;