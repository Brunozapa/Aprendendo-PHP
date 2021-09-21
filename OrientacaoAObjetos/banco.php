<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;

$primeiraConta = new Conta(new Titular(new CPF ('19-11'), 'Vinicius Dias', new Endereco('São Paulo', 'Campinas', 'Rua Amazonas', '501')));

$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
//echo $primeiraConta->recuperaEnderecoTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$segundaConta = new Conta(new Titular(new CPF ('123.456.789-11'),'Patricia', new Endereco('São Paulo', 'Socorro', 'Rua das flores', '15')));
var_dump($segundaConta);

$outra = new Conta(new Titular(new CPF ('123.45'), 'Abcdefg', new Endereco('Paraná', 'Curitiba', 'Rua da rua', '215')));
echo Conta::recuperaNumeroDeContas() . PHP_EOL;

$umaPessoa = new Pessoa('Paulão', new CPF('123.456.789-10'));
echo $umaPessoa->recuperaNome() . PHP_EOL;

$umFuncionario = new Funcionario('Vinicius', new CPF('123.456.789-10'), 'Desenvolvedor');
$umFuncionario->alteraNome('Carlos');

echo $umFuncionario->recuperaNome() . PHP_EOL;
echo $umFuncionario->recuperaCargo() . PHP_EOL;
