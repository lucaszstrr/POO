<?php 

    class Pessoa {

        public $diferenca;
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
/*
        public function getIdade(){
            return $this->idade;
        }
*/
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

            global $diferenca;
            global $idade;

            $data = date('d-m-Y');

            $anoAtual = date('Y');
            $mesAtual = date('m');
            $diaAtual = date('d');

            if($Fulano->getAnoNascimento() < $anoAtual){

                $diferenca = $anoAtual - $Fulano->getAnoNascimento();
                return $diferenca;

            }

            if($Fulano->getMesNascimento() < $mesAtual){

                $mesProvavel = $diferenca - 1;
                return $mesProvavel;
                  
            }elseif($Fulano->getMesNascimento() == $mesAtual && $Fulano->getDiaNascimento() < $diaAtual){

                $idade = $diferenca - 1;
                return $idade;

            }else{

                $idade = $diferenca;
                return $idade;

            }
 
        }

    }

    
    $Fulano = new Pessoa('Fulano', 1, 1, 1990);

    echo "O nome é " . $Fulano->getNome() .PHP_EOL;
    echo "A data de nascimento é " . $Fulano->getDiaNascimento() . "/" . $Fulano->getMesNascimento() . "/" . $Fulano->getAnoNascimento() . PHP_EOL;
    echo "A idade é $idade"  . PHP_EOL;


   
