<?php

echo "Bem-vindo(a) ao screen match!" . PHP_EOL;

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = 2022;
// $notaFilme = 8.8;

$somaDeNotas = 9;
$somaDeNotas += 6;
$somaDeNotas += 8;
$somaDeNotas += 7.5;
$somaDeNotas += 5;
$notaFilme = $somaDeNotas / 5;

$planoPrime = true;
$incluidoNoPlano = $planoPrime && $anoLancamento < 2020;

echo $nomeFilme . PHP_EOL;
echo $notaFilme . PHP_EOL;