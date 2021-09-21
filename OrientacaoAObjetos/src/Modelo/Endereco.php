<?php

namespace Alura\Banco\Modelo;
class Endereco
{
    private $estado;
    private $cidade;
    private $rua;
    private $numero;

    public function __construct(string $estado, string $cidade, string $rua, string $numero)
    {
        $this->estado = $estado;
        $this->cidade = $cidade;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function recuperaEstado(): string
    {
        return $this->estado;
    }

    public function recuperaCidade(): string
    {
        return $this->cidade;
    }

    public function recuperaRua(): string
    {
        return $this->rua;
    }

    public function recuperaNumero(): string
    {
        return $this->numero;
    }
}

