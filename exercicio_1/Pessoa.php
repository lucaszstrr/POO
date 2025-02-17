<?php 

    class Pessoa {

        public String $nome;
        public int $idade;
        public int $diaNascimento;
        public int $mesNascimento;
        public int $anoNascimento;

        public function __construct($nome, $diaNascimento, $mesNascimento, $anoNascimento){
            $this->nome = $nome;
            $this->diaNascimento = $diaNascimento;
            $this->mesNascimento = $mesNascimento;
            $this->anoNascimento = $anoNascimento;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getIdade(){
            return $this->idade;
        }

        public function getDiaNascimento(){
            return $this->diaNascimento;
            
        }
        public function getMesNascimento(){
            return $this->mesNascimento;
        }

        public function getAnoNascimento(){
            return $this->anoNascimento;
        }

        public function calculaIdade(){
            $this->idade = 2025 - $this->anoNascimento;
            return $this->idade;
        }

    }

    
    $Fulano = new Pessoa('Fulano', 1, 1, 1990);

    echo "O nome é " . $Fulano->getNome() .PHP_EOL;
    echo "A idade é " . $Fulano->calculaIdade() .PHP_EOL;
    echo "O dia de nascimento é " . $Fulano->getDiaNascimento() .PHP_EOL;
    echo "O mês de nascimento é " . $Fulano->getMesNascimento() .PHP_EOL;
    echo "O ano de nascimento é " . $Fulano->getAnoNascimento() .PHP_EOL;


   
