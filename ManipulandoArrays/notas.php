<?php

require 'Calculadora.php';

$notas = [7, 8, 5, 10, 9];

$calculadora = new Calculadora();
$media = $calculadora->calculaMediaDeNotas($notas);

if (is_null($media)){
    echo "Não foi possivel calcular a media";
} else {
    echo "A média é: " . $media;
}