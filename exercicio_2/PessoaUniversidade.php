<?php 

    class PessoaUniversidade{

        public $nomePessoa;

        public function __construct($nomePessoa){
            $this->nomePessoa = $nomePessoa;
        }

        public function nomePessoa(){
            
            return $this->nomePessoa;

        }

    }

    