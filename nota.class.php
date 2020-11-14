<?php 

    class Nota{
        private $notap1;
        private $notap2;
        private $notat;

        public function getNotap1(){
            return $this->notap1; 
        }

        public function getNotap2(){
            return $this->notap2; 
        }

        public function getNotat(){
            return $this->notat; 
        }

        public function setNotap1($nota1){
            $this->notap1 = $nota1;
        }

        public function setNotap2($nota2){
            $this->notap2 = $nota2; 
        }

        public function setNotat($nota3){
            $this->notat = $nota3; 
        }

        public function notaFinal($notap1, $notap2, $notat){
            $notaFinal = (($notap1 * 3.5) + ($notap2 * 3.5) + ($notat * 3));
            return $notaFinal;
        }
    }
    
?> 