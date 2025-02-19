<?php

    class Produto{

        public $produto;
        public $preco;
        public $quantidade;
        public $estoque;
        public $total;

        function __construct($produto, int $quantidade){
            $this->produto = $produto;
            $this->quantidade = $quantidade;
        }

        function calculoEstoque(){

            $estoque = 1000;
            $total = $estoque - $this->quantidade;

        }

        public function InformaPedido(){
            return $this->produto;
            return $this->quantidade;
            return $this->total;
        }

    }