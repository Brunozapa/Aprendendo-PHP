<?php

namespace Alura\Banco\Modelo;

use Alura\Banco\Service\Autenticador;
use Couchbase\Authenticator;

interface Autenticavel
{
    public function podeAutenticar(string $senha);
}