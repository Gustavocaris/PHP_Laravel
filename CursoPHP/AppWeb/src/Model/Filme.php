<?php

// sempre que eu criar um novo filme, meu array de notas vai ser vazio
class Filme {
    private array $notas = [];

    public function __construct (
        public readonly string $nome,
        public readonly int $anoLancamento,
        public readonly Genero $genero,
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

}

