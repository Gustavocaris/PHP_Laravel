<?php

require __DIR__ . "/src/Model/Filme.php";

echo "Bem Vindo a nossa aplicação Webfilme\n";

$filme = new Filme();
$filme->nome = 'Thor ragnarok';
$filme->anoLancamento = '2021';
$filme->genero = 'Super-heroi';
$filme->nota = '8';

var_dump($filme);

?>