<?php
    $n1 = (float) readline("Digite o primeiro numero\n");
    $n2 = (float) readline("Digite o segundo numero\n");

    $soma=$n1+$n2;
    $subtracao=$n1-$n2;
    $multiplicacao=$n1*$n2;
    $divisao=$n1/$n2;

    echo("O resultado da soma entre os numeros é ". $soma . "\n");
    echo("O resultado da subtração entre os numeros é ". $subtracao . "\n");
    echo("O resultado da multiplicação entre os numeros é ". $multiplicacao . "\n");
    echo("O resultado da divisão entre os numeros é ". $divisao . "\n");
?>