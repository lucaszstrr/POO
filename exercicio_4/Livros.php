<?php

require_once "PessoasCadastradas.php";

class Livros{

    public $nomeLivro;
    public $autor;
    public $paginas;
    public int $disponibilidade;

    public function __construct($nomeLivro, $autor, $paginas, int $disponibilidade){
        $this->nomeLivro = $nomeLivro;
        $this->autor = $autor;
        $this->paginas = $paginas;
        $this->disponibilidade = $disponibilidade;
    }

    public function Aluguel(){

        if($this->disponibilidade === 1){
            echo "O livro está disponível para aluguel de ";
            return $this->disponibilidade;

        }else{
            echo "O livro não está disponível para aluguel de ";
            return false;

        }

    }
    
    public function getNomeLivro(){
        $this->nomeLivro;
    }
    public function getAutor(){
        $this->autor;
    }
    public function getPaginas(){
        $this->paginas;
    }
    public function getDisponibilidade(){
        $this->disponibilidade;
    }

}
