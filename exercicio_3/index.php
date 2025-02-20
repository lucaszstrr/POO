<?php

    require_once "Produto.php";
    require_once "ItemPedido.php";
    require_once "Pedido.php";

    $produto1 = new Produto("maçã", 2, 100);
    $produto2 = new Produto("morango", 3, 100);
    $produto3 = new Produto("banana", 5, 100);


    $item1 = new ItemPedido($produto1, 40);
    $item2 = new ItemPedido($produto2, 20);
    $item3 = new ItemPedido($produto3, 10);


    $pedido = new Pedido();
    $pedido->adicionarItem($item1);
    $pedido->adicionarItem($item2);
    $pedido->adicionarItem($item3);

    $pedido->setPagamento("dinheiro");

    $pedido->finalizarPedido();


