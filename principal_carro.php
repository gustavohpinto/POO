<?php 

    include 'carro.class.php';

    $marea = new Carro();
    $unomille = new Carro();
    $corsa = new Carro();
    $ka = new Carro();
    $gla = new Carro();

    $marea->marca = "Fiat";
    $marea->modelo = "Marea"; 
    $marea->combustivel = "Gasolina"; 
    $marea->portas = 4;  
    $marea->capacidade_tanque = "63 Litros";   

    $unomille->marca = "Fiat";
    $unomille->modelo = "Uno Mille"; 
    $unomille->combustivel = "Flex"; 
    $unomille->portas = 2;  
    $unomille->capacidade_tanque = "50 Litros"; 

    $corsa->marca = "Chevrolet";
    $corsa->modelo = "Corsa Wind"; 
    $corsa->combustivel = "Flex"; 
    $corsa->portas = 2;  
    $corsa->capacidade_tanque = "46 Litros"; 

    $ka->marca = "Ford";
    $ka->modelo = "Ka Sedan"; 
    $ka->combustivel = "Flex"; 
    $ka->portas = 4;  
    $ka->capacidade_tanque = "52 Litros";

    $gla->marca = "Mercedes-Benz";
    $gla->modelo = "Classe GLA"; 
    $gla->combustivel = "Flex"; 
    $gla->portas = 4;  
    $gla->capacidade_tanque = "50 Litros"; 

    $marea->imprime();
    echo "<br>";
    $unomille->imprime();
    echo "<br>";
    $corsa->imprime();
    echo "<br>";
    $ka->imprime();
    echo "<br>";
    $gla->imprime();

?>