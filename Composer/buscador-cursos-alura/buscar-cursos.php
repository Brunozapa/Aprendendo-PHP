<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['verify' => false]);
$resposta = $client->request('GET', 'https://ge.globo.com/futebol/brasileirao-serie-a/');

$html = $resposta->getBody();

$crawler = new Crawler();
$crawler->addHtmlContent($html);

$times = $crawler->filter('strong.classificacao__equipes.classificacao__equipes--nome');

foreach ($times as $time) {
    echo $time->textContent . PHP_EOL;
}