<?php

    require_once "PessoasCadastradas.php";
    require_once "Livros.php";


    $pessoa1 = new PessoasCadastradas('Lucas', 'Guarapuava', 'abc@email.com', '40028922');
    $livro1 = new Livros('ABC', 'autor', 100, 1);

    $pessoa2 = new PessoasCadastradas('Fulano', 'Guarapuava', 'abc@email.com', '40028922');
    

    $livro1->Aluguel($pessoa1);
    $livro1->Aluguel($pessoa2);


