<?php

// sempre que eu criar um novo filme, meu array de notas vai ser vazio
class Filme {
    private string $nome = "Nome padrão";
    private int $anoLancamento = 2023;
    private string $genero = "Ação";
    private array $notas = [];

    function avalia(float $nota){
        // this é pra chamar o objeto pra dentro da minha funcao
        $this->notas[] = $nota;
    }
    public function media(): float {
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / count($this->notas);
    }
    public function anoLancamento(): int {
        return $this->anoLancamento;
    }
    public function defineAnoLancamento(int $anoLancamento): void {
        $this->anoLancamento = $anoLancamento;
    }
}

