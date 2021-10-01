<?php

namespace Alura\Banco\Modelo;

use Throwable;

class NomeInvalidoException extends \DomainException
{
    public function __construct()
    {
        $message = "Insira um nome válido (mais de 4 caracteres)";
        parent::__construct($message);
    }
}