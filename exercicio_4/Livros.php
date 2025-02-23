<?php

require_once "PessoasCadastradas.php";

class Livros{

    public $nomeLivro;
    public $autor;
    public $paginas;
    public int $disponibilidade;
    public $pessoaAluguel;

    public function __construct($nomeLivro, $autor, $paginas){
        $this->nomeLivro = $nomeLivro;
        $this->autor = $autor;
        $this->paginas = $paginas;
        $this->disponibilidade = true;
        $this->pessoaAluguel = null;
    }

    public function Aluguel(PessoasCadastradas $pessoa){

        if($this->disponibilidade){

            $this->disponibilidade = false;
            $this->pessoaAluguel = $pessoa;
            echo "O livro " . $this->nomeLivro . " foi alugado por " . $pessoa->nome . PHP_EOL;

        }else{

            echo "O livro " . $this->nomeLivro . " não está disponível para aluguel de " . $pessoa->nome . PHP_EOL;

        }

    }

    public function Devolver(){

        if($this->disponibilidade === false){

            $this->disponibilidade = true;
            echo "O livro " . $this->nomeLivro . " foi devolvido por " . $this->pessoaAluguel->nome . PHP_EOL;
            unset($this->pessoaAluguel);

        $this->pessoaAluguel = null;

    }else{

        echo "O livro " . $this->nomeLivro . " está disponível para aluguel de " . $this->pessoaAluguel->nome . PHP_EOL;

    }
    
    }
}
