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

        public function calculaIdade(){

            global $pessoa1;
            global $diferenca;
            global $data;
            global $mesAtual;
            global $diaAtual;
            global $anoAtual;

            $data = date('d-m-Y');

            $anoAtual = date('Y');
            $mesAtual = date('m');
            $diaAtual = date('d');

            $diferenca = $anoAtual - $pessoa1->getAnoNascimento();
            
        }

        public function ajustaDataDeNascimento(){

            global $pessoa1;
            global $diferenca;
            global $idade;
            global $mesAtual;
            global $diaAtual;

            if($pessoa1->getMesNascimento() < $mesAtual){

                $idade = $diferenca - 1;
                return $idade;
                  
            }elseif($pessoa1->getMesNascimento() == $mesAtual && $pessoa1->getDiaNascimento() < $diaAtual){

                $idade = $diferenca - 1;
                return $idade;

            }elseif($pessoa1->getMesNascimento() >= $mesAtual && $pessoa1->getDiaNascimento() >= $diaAtual){

                $idade = $diferenca;

            }

        }

    }


    $pessoa1 = new Pessoa('Lucas', 20, 11, 2007);

    $idade = $pessoa1->ajustaDataDeNascimento($idade);
  
    echo "O nome é " . $pessoa1->getInformaNome() .PHP_EOL;
    echo "A data de nascimento é " . $pessoa1->getDiaNascimento() . "/" . $pessoa1->getMesNascimento() . "/" . $pessoa1->getAnoNascimento() . PHP_EOL;
    echo "A idade é $idade" .PHP_EOL;

    

   
