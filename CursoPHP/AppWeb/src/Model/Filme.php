<?php

// sempre que eu criar um novo filme, meu array de notas vai ser vazio
class Filme {
    public string $nome;
    public int $anoLancamento;
    public string $genero;
    public array $notas = [];

    function avalia(float $nota){
        // this é pra chamar o objeto pra dentro da minha funcao
        $this->notas[] = $nota;
    }
    function media(): float {
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / count($this->notas);
    }
}

