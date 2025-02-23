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
            $this->calculaSalario();
        }

        public function calculaSalario(){

            if($this->cargo === 'auxiliar'){
                $this->salario = 2000;
            }elseif($this->cargo === 'gerente'){
                $this->salario = 5000;
            }

        }

        public function getSalario(){
            return $this->salario;
        }

    }

    class Gerente extends Funcionario{

        public $quantidadeDeColaboradores;


        public function __construct($id, $nome, $quantidadeDeColaboradores){
            parent::__construct($id, $nome, 'gerente');
            $this->quantidadeDeColaboradores = $quantidadeDeColaboradores;
            $this->calculaSalario();
        }

        public function calculaSalario(){

            $this->salario = 5000 + ($this->quantidadeDeColaboradores * 50);

        }

    }

    $funcionario = new Funcionario(222, 'joao', 'auxiliar');
    echo "O salario do funcionário ". $funcionario->nome ." é de R$". $funcionario->salario . PHP_EOL;

    $gerente = new Gerente(123, 'felipe', 100);
    echo "O salario do gerente ". $gerente->nome ." é de R$". $gerente->salario . PHP_EOL;