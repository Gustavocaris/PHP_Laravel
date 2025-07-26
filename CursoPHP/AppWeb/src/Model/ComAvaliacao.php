<?php

trait ComAvaliacao {
    private array $notas = [];

    public function avalia(float $nota): void
    {
        $this->notas[] = $nota;
    }

    public function media(): float
    {
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / $quantidadeNotas;
    }
}











/*

Uma trait no PHP é uma forma de reutilizar código em várias classes sem usar herança múltipla. Pense nela como um conjunto de métodos e 
propriedades que você pode "colar" em uma ou mais classes.

Na prática, traits ajudam a evitar duplicação de código, permitindo que você compartilhe funcionalidades comuns entre 
classes que não estão relacionadas por herança. É como se você tivesse um "kit" de funcionalidades que pode ser adicionado a diferentes classes conforme necessário.

*/