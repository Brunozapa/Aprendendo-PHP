<?php

namespace Alura\Banco\Modelo;

trait AcessoPropriedades
{
    public function __get(string $nomeAtributo)
    {
        $metodo = ucfirst($nomeAtributo); // Tranforma a primeira letra em Maiuscula
        $metodo = 'recupera' . $nomeAtributo;

        return $this->$metodo();
    }
}