<?php

    class Produto{

        public $produto;
        public $preco;
        public $estoque;

        public function __construct(String $produto, $preco, $estoque){
            $this->produto = $produto;
            $this->preco = $preco;
            $this->estoque = $estoque;
        }


        function calculoPreco(){

            $valorTotal = $this->quantidade * $this->preco;
            return $this->valorTotal = $valorTotal;

        }

        public function calculoEstoque($quantidade){

            if($this->estoque >= $quantidade){

                $this->estoque -= $quantidade;
                return true;

            }else{

                return false;

            }
            

        }
        
    }