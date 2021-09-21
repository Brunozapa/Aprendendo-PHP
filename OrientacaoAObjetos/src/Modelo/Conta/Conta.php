<?php

namespace Alura\Banco\Modelo\Conta;

class Conta
{
    private $titular;
    private $saldo;
    private static $numeroDeContas = 3;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas ++; // self ==> Conta (é a classe que vc está)
    }
    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function saca(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * 0.05;
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpfPessoa();
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaEnderecoTitular(): Endereco
    {
        return $this->titular->recuperaEndereco();
    }

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas; // "self" substitui o nome da classe. Neste caso a classe "Conta".
    }

}