<?php

use Alura\Doctrine\Helper\EntityManagerFactory as EntityManagerFactoryAlias;

require_once __DIR__ . '/vendor/autoload.php';

$entinyManagerFactoty = new EntityManagerFactoryAlias();
$entinyManager = $entinyManagerFactoty->getEntityManager();

var_dump($entinyManager->getConnection());