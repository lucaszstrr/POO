<?php 

    require_once "Universidade.php";
    require_once "PessoaUniversidade.php";

    $uni1 = new Universidade("Universidade Sul");
    $uni2 = new Universidade("Universidade Norte");
    $uni3 = new Universidade("Universidade Oeste");

    $pessoa1 = new PessoaUniversidade("Carlos");
    $pessoa2 = new PessoaUniversidade("Rafael");
    $pessoa3 = new PessoaUniversidade("Ana");

    echo $pessoa1->nomePessoa(). " trabalha na " . $uni1->nomeUniversidade() . "." . PHP_EOL;
    echo $pessoa2->nomePessoa(). " trabalha na " . $uni2->nomeUniversidade() . "." . PHP_EOL;
    echo $pessoa3->nomePessoa(). " trabalha na " . $uni3->nomeUniversidade() . "." . PHP_EOL;