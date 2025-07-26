<?php

abstract class Titulo implements Avaliavel {
    
    private array $notas = [];

    public function __construct (
        public readonly string $nome,
        public readonly int $anoLancamento,
        public readonly Genero $genero,
        public readonly int $duracaoEmMinutos,
    ) {
        //$this->notas = [];
    }

    function avalia(float $nota): void {
        // this é pra chamar o objeto pra dentro da minha funcao
        $this->notas[] = $nota;
    }
    public function media(): float {
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / count($this->notas);
    }

    // código omitido
    abstract public function duracaoEmMinutos(): int;
    
}