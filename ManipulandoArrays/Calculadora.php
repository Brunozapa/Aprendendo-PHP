<?php

class Calculadora
{

    public function calculaMediaDeNotas(array &$notas): ?float
    {
        $quantidadeNotas = sizeof($notas);

        if ($quantidadeNotas < 1){
        return null;
        }

        $soma = 0;
        for ($i = 0; $i < $quantidadeNotas; $i++){
            $soma += $notas[$i];
        }
        $media = $soma / $quantidadeNotas;

        return $media;
    }
}