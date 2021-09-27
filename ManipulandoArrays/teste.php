<?php

require "ArrayUtils.php";

$correntistas_e_compras = [
    "Giovanni",
    12,
    "Maria",
    25,
    "Luis",
    "Luísa",
    "12"
];

ArrayUtils::remover("jonas", $correntistas_e_compras);
var_dump($correntistas_e_compras);