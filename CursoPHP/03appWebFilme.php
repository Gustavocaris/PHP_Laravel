<?php

//Quando explicitamos o tipo, aumentamos a segurança do código e facilitamos a procura por erros.

/*
void: O tipo void é utilizado para indicar que uma função não retorna nenhum valor. Quando você vê : void após os parênteses de uma função, 
isso significa que a função não deve retornar nada. Por exemplo, na função exibeMensagemLancamento(int $ano): void, 
estamos especificando que essa função executa uma ação (como exibir uma mensagem) mas não retorna nenhum valor.

bool: Quando você vê bool antes de um parâmetro ou após os parênteses de uma função, isso indica que o parâmetro ou o retorno da função 
deve ser do tipo booleano. O tipo booleano em PHP pode ter apenas dois valores: true (verdadeiro) ou false (falso). 
Por exemplo, na função incluidoNoPlano(bool $planoPrime, int $anoLancamento): bool, estamos dizendo que o primeiro parâmetro 
deve ser um valor booleano e que a função retornará um valor booleano também.

*/

function exibeMensagem(int $ano): void {
    if ($ano > 2022) {
    echo "Esse filme é um lançamento\n";
    } elseif($ano > 2020 && $ano <= 2022) {
        echo "Esse filme ainda é novo\n";
    } else {
        echo "Esse filme não é um lançamento\n";
    }
}

// da pra gente colocar o tipo da funcão no php->
function incluidoNoPlano(bool $planoPrime,int $anoLancamento): bool {
    return $planoPrime || $anoLancamento < 2020;
}


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

$filme = [
    "nome" => "Thor: Ragnarok",
    "ano" => 2021,
    "nota" => 7.8,
    "genero" => "super-herói",
];


echo $filme["ano"];

/*
A função var_dump() em PHP é utilizada para exibir informações sobre uma variável de forma detalhada. 
Ela fornece o tipo da variável, o tamanho (no caso de strings e arrays) e o conteúdo da variável.

-> var_dump() é utilizado para:
Verificar o tipo de dados/ Exibir o conteúdo/ Depuração
*/

var_dump($notas);
sort($notas);
var_dump($notas);
$menorNota = min($notas);
var_dump($menorNota);

var_dump($filme['nome']);
$posicaoDoisPontos = strpos($filme['nome'], ':');
var_dump($posicaoDoisPontos);

var_dump(substr($filme['nome'], 0, $posicaoDoisPontos));
