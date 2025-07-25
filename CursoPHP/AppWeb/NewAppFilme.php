<?php

require __DIR__ . "/src/Model/Genero.php";
require __DIR__ . "/src/Model/Filme.php";

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


?>