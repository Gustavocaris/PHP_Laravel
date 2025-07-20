<?php

class Filme {
    public string $nome;
    public int $anoLancamento;
    public string $genero;
    public float $media;
    public array $notas = [];

    function avalia(float $nota){
        $notas[] = $nota;
    }
}

