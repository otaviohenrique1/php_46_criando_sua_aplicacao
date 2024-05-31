<?php

echo "Bem-vindo(a) ao screen match!" . PHP_EOL;

$nomeFilme = "Top Gun - Maverick";
// $nomeFilme = "Thor: Ragnarok";
// $nomeFilme = "Se beber não case";

$anoLancamento = 2022;
// $anoLancamento =  $argv[1] ?? 2024;
// $notaFilme = 8.8;

// $somaDeNotas = 9;
// $somaDeNotas += 6;
// $somaDeNotas += 8;
// $somaDeNotas += 7.5;
// $somaDeNotas += 5;
// $notaFilme = $somaDeNotas / 5;

$quantidadeDeNotas = $argc - 1;
$somaDeNotas = 0;

for ($i=0; $i < $argc; $i++) { 
  $somaDeNotas += (float) $argv[$i];
}

// $somaDeNotas += $argv[1];
// $somaDeNotas += $argv[2];
// $somaDeNotas += $argv[3];

$notaFilme = $somaDeNotas / $quantidadeDeNotas;

$planoPrime = true;
$incluidoNoPlano = $planoPrime && $anoLancamento < 2020;

// $nomeFilme = $argv[2];
// $notaFilme =  $argv[3];

echo $nomeFilme . PHP_EOL;
echo $anoLancamento . PHP_EOL;
echo $notaFilme . PHP_EOL;

if ($anoLancamento > 2022) {
  echo "Esse filme é um lançamento" . PHP_EOL;
} elseif($anoLancamento > 2020 && $anoLancamento <= 2022) {
  echo "Esse filme ainda é novo" . PHP_EOL;
} else {
  echo "Esse filme não é um lançamento" . PHP_EOL;
}

$genero = match($nomeFilme) {
  "Top Gun - Maverick" => "ação",
  "Se beber não case" => "comédia",
  "Thor: Ragnarok" => "super-herói",
  default => "gênero desconhecido",
};

echo "O gênero do filme é: $genero" .  PHP_EOL;
echo $argc . PHP_EOL;

$filme = [
  "nome" => "Thor: Ragnarok",
  "ano" => 2021,
  "nota" => 7.8,
  "genero" => "super-herói"
];

echo $filme['nome'] . PHP_EOL;

// $notasParaOFilme = [
//   10, 8, 9, 7.5, 5, 6.8
// ];

// $notasParaOFilme2 = array(
//   10, 8, 9, 7.5, 5, 6.8
// );

// $a = array(
//   0 => "a",
//   1 => "b",
//   2 => "c",
//   3 => "d",
//   4 => "e",
//   5 => "f",
// );

$notas = [];

for ($i=1; $i < $argc; $i++) { 
  $notas[] = (float) $argv[$i];
}

var_dump($notas);

$somaDeNotas = 0;
