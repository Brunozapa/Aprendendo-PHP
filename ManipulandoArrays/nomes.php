<?php

$nomes = "Bruno, Paulo, Pedro, Vitor";

// transforma a string nomes em array.
$array_nomes = explode (", ", $nomes);

var_dump($array_nomes);

$string_nomes = implode(", ", $array_nomes);

 var_dump($string_nomes);