<?php

// sempre que eu criar um novo filme, meu array de notas vai ser vazio
class Filme {
    public string $nome;
    public int $anoLancamento;
    public string $genero;
    public array $notas = [];

    function avalia(float $nota){
        $notas[] = $nota;
    }
    function media(): float {
        $somaNotas = array_sum($notas);
        $quantidadeNotas = count($notas);

        return $somaNotas / count($notas);
    }
}

