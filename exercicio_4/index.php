<?php

    require_once "PessoasCadastradas.php";
    require_once "Livros.php";
    require_once "Aluguel.php";



    $pessoa1 = new PessoasCadastradas('Lucas', 'Guarapuava', 'abc@email.com', 40028922);
    $livro1 = new Livros('ABC', 'autor', 100, 1);
    echo "$pessoa1->nome alugou $livro1->nomeLivro" . PHP_EOL;
