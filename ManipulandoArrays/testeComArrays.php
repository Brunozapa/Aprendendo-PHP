<?php

$correntistas = [
    "Giovanni",
    "João",
    "Maria",
    "Luis",
    "Luisa",
    "Rafael"
];

$correntistasNaoPagantes = [
    "Luis",
    "Luisa",
    "Rafael",
];

// array_diff
$correntistasPagantes = array_diff($correntistas, $correntistasNaoPagantes);
echo "ARRAY_DIFF";
var_dump($correntistasPagantes);

$correntistas2 = [
    "Giovanni",
    "João",
    "Maria",
    "Luis",
    "Luisa",
    "Rafael"
];

$saldos = [
    2500,
    3000,
    4400,
    1000,
    8700,
    9000
];

// array_merge
$relacionados1 = array_merge($correntistas2, $saldos);
echo "ARRAY_COMBINE" . PHP_EOL;
var_dump($relacionados1);

// array_combine
$relacionados2 = array_combine($correntistas2, $saldos);
echo "ARRAY_COMBINE" . PHP_EOL;
var_dump($relacionados2);

echo $relacionados2 ["Giovanni"] . PHP_EOL;
$relacionados["Matheus"] = 4500;

echo "O saldo do Giovanni é: {$relacionados2["Giovanni"]} . PHP_EOL";

if(array_key_exists("Joao",  $relacionados2)){
    echo "O saldo do João é: {$relacionados2["Joao"]}" . PHP_EOL;
} else {
    echo "Joao não encontrado no array" . PHP_EOL;
}