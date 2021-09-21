<?php

namespace Alura\Banco\Modelo;

class Pessoa
{
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

    protected function validaNome(string $nome)
    {
        if (strlen($nome) < 5){
            echo "Insira um nome válido (mais de 4 caracteres)";
            exit();
        }
    }


}