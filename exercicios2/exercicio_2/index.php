<?php

    require_once "Objeto.php";
    require_once "Triangulo.php";
    require_once "Retangulo.php";

    echo "----------------------------------" . PHP_EOL;

    $retangulo = new Retangulo(10, 5);
    $retangulo->Area(10, 5);
    $retangulo->Verificacao();

    echo "----------------------------------" . PHP_EOL;

    $quadrado = new Retangulo(10, 10);
    $quadrado->Area(10, 10);
    $quadrado->Verificacao();

    echo "----------------------------------" . PHP_EOL;

    $triangulo = new Triangulo(8, 4, 'equilatero');
    $triangulo->TipoTriangulo();

    echo "----------------------------------" . PHP_EOL;

    $trianguloRetangulo = new Triangulo(8, 4, 'retangulo');
    $trianguloRetangulo->TipoTriangulo();

    echo "----------------------------------" . PHP_EOL;

    $trianguloEscaleno = new Triangulo(8, 4, 'escaleno');
    $trianguloEscaleno->TipoTriangulo();