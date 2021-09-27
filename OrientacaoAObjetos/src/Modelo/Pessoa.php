<?php

namespace Alura\Banco\Modelo;

abstract class Pessoa
{
    use AcessoPropriedades; // Um use dentro da class significa sempre uma Trait

    protected $nome;
    private $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    protected function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    final protected function validaNome(string $nome)
    {
        if (strlen($nome) < 5){
            echo "Insira um nome válido (mais de 4 caracteres)";
            exit();
        }
    }


}