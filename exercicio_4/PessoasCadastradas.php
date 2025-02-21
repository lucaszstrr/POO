<?php


    class PessoasCadastradas{

        public $nome;
        public $endereco;
        public $email;
        public $telefone;

        public function __construct($nome, $endereco, $email, $telefone){
            $this->nome = $nome;
            $this->endereco = $endereco;
            $this->email = $email;
            $this->telefone = $telefone;
        }

        public function getNome(){
            $this->nome;
        }
        public function getEndereco(){
            $this->endereco;
        }
        public function getEmail(){
            $this->email;
        }
        public function getTelefone(){
            $this->telefone;
        }

    }
