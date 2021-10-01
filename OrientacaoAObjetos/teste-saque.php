<?php

use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, SaldoInsuficienteException, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};


require_once 'autoLoad.php';

$conta = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-10'),
        'Vinicius Dias',
        new Endereco('Petropolis', 'bairro Teste', 'Rua lá', '37')
    )
);

$conta->deposita(500);
$conta->saca(100);
echo $conta->recuperaSaldo();

try {
    $conta->saca(600);
} catch (SaldoInsuficienteException $exception){
    echo "Você não tem saldo para realizar este saque." . PHP_EOL;
    echo $exception->getMessage();
}