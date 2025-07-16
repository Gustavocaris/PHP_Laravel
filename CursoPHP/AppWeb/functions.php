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
