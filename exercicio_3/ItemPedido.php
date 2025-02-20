<?php 

    class ItemPedido{

        public $produto;
        public $quantidade;

        public function __construct(Produto $produto, $quantidade){
            $this->produto = $produto;
            $this->quantidade = $quantidade;
        }

        public function getSubtotal(){
            return $this->produto->preco * $this->quantidade;
        }

    }