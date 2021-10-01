<?php
require 'autoLoad.php';

use Alura\Banco\Modelo\Funcionario\Desenvolvedor;
use Alura\Banco\Modelo\CPF;


try {
    $desenvolvedor = new Desenvolvedor('Vinicius', new CPF('123.456.789-10'), 2000);
    echo $desenvolvedor->nome;
}   catch (NomeInvalidoException | InvalidArgumentException $exception){
    echo $exception->getMessage();
}


