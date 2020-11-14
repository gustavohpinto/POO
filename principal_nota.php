<?php 

    include 'nota.class.php';

    $notafinal1 = new Nota();

    $notafinal1->setNotap1(10);
    $notafinal1->setNotap2(8);  
    $notafinal1->setNotat(5); 

    //teste para ver se consegue acessar os valores dos atributos
    echo "1° Nota de prova: " .$notafinal1->getNotap1()."<br>";
    echo "2° Nota de prova: " .$notafinal1->getNotap2()."<br>";
    echo "Nota de trabalho: " .$notafinal1->getNotat()."<br>";

    //chamando a função soma

    $nf = $notafinal1->notaFinal($notafinal1->getNotap1(), $notafinal1->getNotap2(), $notafinal1->getNotat());

    if ($nf>=70) {
        echo "O aluno está APROVADO, sua nota final é ".$nf;
    }
    else {
        echo "O aluno está REPROVADO, sua nota final é ".$nf;
    }

?>