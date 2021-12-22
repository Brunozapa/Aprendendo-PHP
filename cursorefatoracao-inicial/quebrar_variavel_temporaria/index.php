<?php declare(strict_types=1);

// function retangulo(int $altura, int $largura): void
// {
//     $temp = 2 * ($altura + $largura);
//     echo "Perímetro: $temp" . PHP_EOL;

//     $temp = $altura * $largura;
//     echo "Área: $temp" . PHP_EOL;
// }

function retangulo(int $altura, int $largura): void
{

    $perimetro = 2 * ($altura + $largura);
    $area = $altura * $largura;

    echo "Perímetro: $perimetro" . PHP_EOL;
    echo "Área: $area" . PHP_EOL;
}

retangulo(3, 10);
