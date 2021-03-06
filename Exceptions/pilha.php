<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    try {
        funcao2();
    } catch (RuntimeException | DivisionByZeroError $erroOuExcecao) {
        echo $erroOuExcecao->getMessage() . PHP_EOL;
        echo $erroOuExcecao->getLine() . PHP_EOL;
        echo $erroOuExcecao->getTraceAsString() . PHP_EOL;
    }
    throw new RuntimeException(
        'Exceção foi tratada, mas pega aí',
        1,
        $erroOuExcecao
    );
    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

//    $arrayFixo = new SplFixedArray(2);
//    $arrayFixo[3] = 'Valor';
//
//    $divisao = intdiv(5, 0);

    throw new RuntimeException();

    for ($i = 1; $i <= 5; $i++) {
        echo $i . PHP_EOL;
    }

    echo 'Saindo da função 2' . PHP_EOL;
}

echo "Iniciando o progrma";
funcao1();
echo "Finalizando o programa";