<?php 

    class Calculadora{
        private $num1;
        private $num2;

        public function getNum1(){
            return $this->num1; 
        }

        public function getNum2(){
            return $this->num2; 
        }

        public function setNum1($numero1){
            $this->num1 = $numero1;
        }

        public function setNum2($numero2){
            $this->num2 = $numero2; 
        }

        public function soma($n1, $n2){
            $soma = $n1 + $n2;
            return $soma;
        }

        public function subtracao($n1, $n2){
            $subtracao = $n1 - $n2;;
            return $subtracao;
        }

        public function multiplicacao($n1, $n2){
            $multiplicacao = $n1 * $n2;;
            return $multiplicacao;
        }

        public function divisao($n1, $n2){
            $divisao = $n1 / $n2;;
            return $divisao;
        }
    }
    
?> 