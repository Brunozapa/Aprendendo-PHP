<?php declare(strict_types=1);

function recebeDesconto(
    int $descontoInicial, 
    bool $ehPremium, 
    int $quantidade, 
    int $anosCliente
): void
{
    $desconto = $descontoInicial;

    if ($descontoInicial > 200) {
        return;
    }

    if ($ehPremium === true) {
        //$descontoInicial = $descontoInicial * 1.1;
        $desconto = $desconto * 1.1;
    }

    if ($quantidade > 50) {
        //$descontoInicial = $descontoInicial * 1.2;
        $desconto = $desconto * 1.2;
    }

    if ($anosCliente > 3) {
        //$descontoInicial = $descontoInicial * 1.1;
        $desconto = $desconto * 1.1;
    }

    echo <<<EOF
--------------------
 Desconto inicial: $descontoInicial,
 Desconto Final: $desconto
--------------------
EOF;
}

recebeDesconto(50, true, 100, 100);
