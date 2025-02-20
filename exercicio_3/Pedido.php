<?php

    class Pedido{

        public $itens = [];
        public $pagamento;

        public function adicionarItem(ItemPedido $item){
            if($item->produto->calculoEstoque($item->quantidade)){
                $this->itens[] = $item;
                return true;
            }else{
                return false;
            }
        }

        public function setPagamento($pagamento){
            $this->pagamento = $pagamento;
        }

        public function calcularTotal(){
            $total = 0;
            foreach($this->itens as $item){
                $total += $item->getSubtotal();
            }
            return $total;
        }

        public function finalizarPedido(){
            echo "Pedido finalizado" . PHP_EOL;
            echo "Forma de pagamento: " . $this->pagamento . PHP_EOL;
            echo "Total: R$" . $this->calcularTotal() . PHP_EOL;
        }
    
    }