<?php declare(strict_types=1);

namespace Alura;

require "autoload.php";

$correntistas_e_compras = [
    "Giovanni",
    12,
    "Maria",
    25,
    "Luis",
    "Luísa",
    "12"
];

ArrayUtils::remover(12, $correntistas_e_compras);
var_dump($correntistas_e_compras);