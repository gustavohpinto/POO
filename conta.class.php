<?php 

    class Conta{
        public $agencia;
        public $numconta;
        public $saldo;
        public $titular;
        public $limite = 500;

    
        function sacar($valor){
            echo "Você esta sacando: " .$valor;

            if ($valor > $this->saldo + $this->limite) {
                echo "<br>";
                echo "Saque não autorizado: limite excedido";
            }
                else {
                $this->saldo-= $valor;
                echo "<br>";
                echo "Seu saldo agora é de " .$this->saldo;
                }

        }

        function depositar($valor){
            echo "Você esta depositando: " .$valor;
            $this->saldo+= $valor;
            echo "<br>";
            echo "Seu saldo agora é de " .$this->saldo;
        }

        function ver_saldo(){
            echo "Saldo: " .$this->saldo;
        }

    }


?>