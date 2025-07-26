<?php


require __DIR__ . "/src/Model/Genero.php";
require __DIR__ . "/src/Model/Titulo.php";
require __DIR__ . "/src/Model/Serie.php";
require __DIR__ . "/src/Model/Filme.php";
require __DIR__ . "/src/calc/CalculadoraMaratona.php";



echo "Bem Vindo a nossa aplicação Webfilme\n";

$filme = new Filme(
    'Thor ragnarok',
    '2021',
    Genero::SuperHeroi,
    180,
);

/*
$filme->nome = 'Thor ragnarok';
$filme->anoLancamento = '2021';
$filme->genero = 'Super-heroi';
$filme->nota = '8';
*/

$filme->avalia(1);
$filme->avalia(4.5);
$filme->avalia(5);
$filme->avalia(6.3);

var_dump($filme);

echo $filme->media() . ".\n";

echo $filme->anoLancamento . ".\n";

$serie = new Serie('Lost', 2007, Genero::Drama, 10, 20, 30);

echo $serie->anoLancamento . "\n";

$serie->avalia(8);

echo $serie->media() . "\n";

$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracao = $calculadora->duracao();

echo "Para essa maratona, você precisa de $duracao minutos";





?>