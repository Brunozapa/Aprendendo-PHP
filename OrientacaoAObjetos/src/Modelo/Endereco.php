<?php

namespace Alura\Banco\Modelo;

/**
 * Class Endereco
 * @package Alura\Banco\Modelo
 * @property-read string $cidade
 * @property-read string $bairro
 * @property-read string $rua
 * @property-read string $numero
 */

final class Endereco
{
    use AcessoPropriedades; // Um use dentro da class significa sempre uma Trait

    private $cidade;
    private $bairro;
    private $rua;
    private $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function recuperaBairro(): string
    {
        return $this->bairro;
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

    public function alteraCidade(string $novaCidade)
    {
        $this->cidade = $novaCidade;
    }
    public function alteraBairro(string $novoBairro)
    {
        $this->cidade = $novoBairro;
    }
    public function alteraRua(string $novaRua)
    {
        $this->cidade = $novaRua;
    }
    public function alteraNumero(string $novoNumero)
    {
        $this->cidade = $novoNumero;
    }
    public function __toString(): string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }

    public function __set($nomeAtributo, $novoValor)
    {
        $metodo = 'altera' . ucfirst($nomeAtributo);
        $this->$metodo($novoValor);
    }
}

