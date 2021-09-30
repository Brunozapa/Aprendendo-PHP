<?php

namespace Alura;

require "autoload.php";

$array_associativo = [
"Giovanni" => 2500,
"João" => 3000,
"maria" => 4400
];

$maiores = ArrayUtils::encontrarPessoasComSaldoMaior(3000, $array_associativo);
var_dump($maiores);