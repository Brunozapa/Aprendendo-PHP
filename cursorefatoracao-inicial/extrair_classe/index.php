<?php declare(strict_types=1);

namespace Alura\ExtrairClasse;

require 'Usuario.php';
require 'Contato.php';

$usuario = new Usuario("Giovanni", "Tempobono", 
    new Contato("Rua Vergueiro 3185", "04101-300", "5571-2751", "11"));

echo $usuario->getNome();
echo $usuario->getTelefoneDdd();
