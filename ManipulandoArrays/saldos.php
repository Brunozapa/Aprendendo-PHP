<?php

$saldos = [700, 200, 300, 400, 500];

foreach ($saldos as $saldo){
    echo "O saldo é: " . $saldo . PHP_EOL;
}

sort($saldos); // Organiza o array do menor para o maior;

echo "O menor saldo é: " . $saldos[0] . PHP_EOL;
echo "O maior saldo é:" . end($saldos);
