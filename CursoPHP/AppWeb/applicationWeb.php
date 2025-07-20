<?php


/*
 chamamos de uma constante mágica. Com ela, podemos recuperar o diretório do arquivo. Se usada dentro de um include ou require, 
 o diretório do arquivo incluído será retornado.
*/

// caminho relativo
require __DIR__ . "/src/functions.php";

echo "Bem-vindo(a) ao screen match!\n";

$nomeFilme = "Top Gun - Maverick";

$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

if ($quantidadeDeNotas > 0) {
    $notaFilme = array_sum($notas) / $quantidadeDeNotas;
} else {
    $notaFilme = 0; // ou algum valor padrão
}

//$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);



echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: $notaFilme\n";
echo "Ano de lançamento: $anoLancamento\n";

exibeMensagem($anoLancamento);

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok" => "super-herói",
    "Se beber não case" => "comédia",
    default => "gênero desconhecido",
};

echo "O gênero do filme é: $genero\n";

$filme = criaFilme(
    nota: 7.8,
    genero: "super-herói",
    anoLancamento: 2021,
    nome: "Thor: Ragnarok",
);


echo $filme->anoLancamento;

/*
A função var_dump() em PHP é utilizada para exibir informações sobre uma variável de forma detalhada. 
Ela fornece o tipo da variável, o tamanho (no caso de strings e arrays) e o conteúdo da variável.

-> var_dump() é utilizado para:
Verificar o tipo de dados/ Exibir o conteúdo/ Depuração
*/

var_dump($notas);

if (!empty($notas)) {
    sort($notas);
    var_dump($notas);

    $menorNota = min($notas);
    var_dump($menorNota);
} else {
    echo "Nenhuma nota foi informada.\n";
}


var_dump($filme->nome);
$posicaoDoisPontos = strpos($filme->nome, ':');
var_dump($posicaoDoisPontos);

var_dump(substr($filme->nome, 0, $posicaoDoisPontos));

//colocando uma funcao dentro de um arquivo
$filmeComoStringJson = json_encode($filme);
file_put_contents(__DIR__ . '/filme.json', $filmeComoStringJson);