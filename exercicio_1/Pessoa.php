<?php 

    class Pessoa {

        public $nome;
        public $idade;
        public $diaNascimento;
        public $mesNascimento;
        public $anoNascimento;

        public function __construct($nome, $diaNascimento, $mesNascimento, $anoNascimento){
            $this->nome = $nome;
            $this->diaNascimento = $diaNascimento;
            $this->mesNascimento = $mesNascimento;
            $this->anoNascimento = $anoNascimento;
        }

        public function calculaIdade(){

            $anoAtual = date('Y');
            $mesAtual = date('m');
            $diaAtual = date('d');

            $idade = $anoAtual - $this->anoNascimento;

            if($mesAtual < $this->mesNascimento || ($diaAtual < $this->diaNascimento && $mesAtual < $this->mesNascimento)){

                $idade--;
                  
            }

            return $this->idade = $idade;

        }

        public function getInformaNome(){
            return $this->nome;
        }

        public function getInformaIdade(){
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

    }


    $pessoa1 = new Pessoa('Lucas', 20, 11, 2007);

    $pessoa1->calculaIdade();
  
    echo "O nome é " . $pessoa1->getInformaNome() .PHP_EOL;
    echo "A data de nascimento é " . $pessoa1->getDiaNascimento() . "/" . $pessoa1->getMesNascimento() . "/" . $pessoa1->getAnoNascimento() . PHP_EOL;
    echo "A idade é " . $pessoa1->getInformaIdade() .PHP_EOL;

    

   
