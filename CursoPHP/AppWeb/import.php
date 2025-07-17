<?php

// Vou pegar um arquivo em Json e transformar em um array agora
$caminhoArquivo = __DIR__ . '/filme.json';
$conteudoArquivoFilme = file_get_contents($caminhoArquivo);
$filme = json_decode($conteudoArquivoFilme);
var_dump($filme);