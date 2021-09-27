<?php

require_once 'autoLoad.php';

use Alura\Banco\Modelo\Endereco;

$umEndereco = new Endereco("São Paulo", "Luz", "Rua C", "35");
$umEndereco->__set('cidade', 'Santos');

//echo $umEndereco->recuperaEstado() . $umEndereco->recuperaCidade() . $umEndereco->recuperaRua() . $umEndereco->recuperaNumero();
// Essa forma de exibir é muito inadequada


// Implementando o metodo __toString podemos exibir da forma desejada.
echo $umEndereco . PHP_EOL;

// echo $umEndereco->recuperaCidade();
// Essa forma de exibir é inadequada

// Isso funciona graças ao metodo __get.
echo $umEndereco->cidade;

