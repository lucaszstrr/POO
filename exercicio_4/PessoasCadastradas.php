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

    }
