<?php

// sempre que eu criar um novo filme, meu array de notas vai ser vazio
class Filme {
    private array $notas = [];

    public function __construct (
        private string $nome,
        private int $anoLancamento,
        private string $genero,
    ) {
        $this->notas = [];
    }

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

    public function nome(): string {
        return $this->nome;
    }
    public function genero(): string {
        return $this->genero;
    }

}

