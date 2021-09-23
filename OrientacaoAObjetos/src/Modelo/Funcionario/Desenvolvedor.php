<?php

namespace Alura\Banco\Modelo\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function calculaBonificacao(): float
    {
        return 500.00;
    }

    public function sobeDeNivel()
    {
        $aumento = $this->recuperaSalario() * 0.75;
        $this->recebeAumento($aumento);
    }
}