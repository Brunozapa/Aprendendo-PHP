<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\{Funcionario};

class ControladorDeBonificacoes
{
    public $totalEmBonificacoes;

    public function adicionaBonificacaoDe(Funcionario $funcionario)
    {
        $this->totalEmBonificacoes += $funcionario->calculaBonificacao();
    }

    public function recuperaTotal(): float
    {
        return $this->totalEmBonificacoes;
    }

}