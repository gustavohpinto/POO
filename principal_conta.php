<?php 

    include 'conta.class.php';

    //criar objeto
    $balabanian = new Conta();
    $carlinhos = new Conta();
    $antonio = new Conta();

    //atribuir valores
    $balabanian->agencia = "1234-5";
    $balabanian->numconta = "123.456-7"; 
    $balabanian->saldo = 1000; 
    $balabanian->titular = "Aracy Balabanian";  

    $balabanian->sacar(600);
    echo "<br>";

    echo "<br>";
    echo "<br>";

    $balabanian->depositar(1000);

?>