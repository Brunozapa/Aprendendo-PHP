<?php

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario\Diretor ;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Service\Autenticador;

require_once 'autoLoad.php';

$autenticador = new Autenticador();
$diretor = new Diretor(
    'João da Silva',
    new CPF('123.456.789-10'),
    10000
);

$gerente = new Gerente(
    'João de Deus',
    new CPF('123.56.789-10'),
    10000
);

$titular = new Titular(new CPF(''), 'assss', new Endereco('$estado', '$cidade', '$rua', '$numero'));

$autenticador->tentaLogin($diretor, '1234');
$autenticador->tentaLogin($gerente, '4321');
$autenticador->tentaLogin($titular, '123');