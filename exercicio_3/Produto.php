<?php

    class Produto{

        public $produto;
        public $quantidade;
        public $preco;
        public $estoque;
        public $pagamento;
        public $total;
        public $valorTotal;
        public $totalEstoque;

        public function __construct(String $produto, $quantidade, $preco, $estoque, String $pagamento){
            $this->produto = $produto;
            $this->quantidade = $quantidade;
            $this->preco = $preco;
            $this->estoque = $estoque;
            $this->pagamento = $pagamento;
        }


        function calculoPreco(){

            $valorTotal = $this->quantidade * $this->preco;
            return $this->valorTotal = $valorTotal;

        }

        function calculoEstoque(){

            if($this->estoque > $this->quantidade){

                $totalEstoque = $this->estoque - $this->quantidade;
                return $this->totalEstoque = $totalEstoque;

            }else{

                echo "Não foi possível fazer a compra, qtd superior ao estoque" .PHP_EOL;

            }
            

        }

        function getCalculoPreco(){

            return $this->valorTotal;

        }

        function getCalculoEstoque(){

            return $this->totalEstoque;

        }

    }