<?php

    require_once "Produto.php";

    $produto1 = new Produto('maçã', 4, 2, 10, 'dinheiro');

    echo "Foram vendidas " . $produto1->quantidade . " unidades de " . $produto1->produto . PHP_EOL;
    echo "Valor da compra: R$" . $produto1->CalculoPreco() . PHP_EOL;
    echo "Agora o estoque é de ". $produto1->CalculoEstoque() . PHP_EOL;
    echo "O meio de pagamento utilizado foi " . $produto1->pagamento . PHP_EOL;
    