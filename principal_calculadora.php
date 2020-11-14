<?php 

    include 'calculadora.class.php';

    $calc1 = new Calculadora();

    $calc1->setNum1(10);
    $calc1->setNum2(5);   

    //teste para ver se consegue acessar os valores dos atributos
    echo "Número 1 = " .$calc1->getNum1()."<br>";
    echo "Número 2 = " .$calc1->getNum2()."<br>";

    //chamando a função soma
    echo "O valor da soma desses valores é: " .$calc1->soma($calc1->getNum1(), $calc1->getNum2());
    echo "<br>";
    echo "O valor da subtração desses valores é: " .$calc1->subtracao($calc1->getNum1(), $calc1->getNum2());
    echo "<br>";
    echo "O valor da multiplicação desses valores é: " .$calc1->multiplicacao($calc1->getNum1(), $calc1->getNum2());
    echo "<br>";
    echo "O valor da divisão desses valores é: " .$calc1->divisao($calc1->getNum1(), $calc1->getNum2());

?>