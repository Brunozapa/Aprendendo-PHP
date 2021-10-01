<?php

namespace Alura\Banco\Modelo;

use http\Exception\InvalidArgumentException;

final class CPF
{
    private $numero;

    public function __construct(string $numero)
    {
        $this->validaCPF($numero);
        $this->numero = $numero;
    }
    private function validaCPF(string $numero){
        $numero = filter_var($numero, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);

        if ($numero === false) {
            throw new InvalidArgumentException();
        }
    }
    public function recuperaNumero(): string
    {
        return $this->numero;
    }
}