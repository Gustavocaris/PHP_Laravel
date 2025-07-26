<?php

abstract class Titulo implements Avaliavel {
    
    use ComAvaliacao;


    public function __construct (
        public readonly string $nome,
        public readonly int $anoLancamento,
        public readonly Genero $genero,
        public readonly int $duracaoEmMinutos,
    ){

    }
    abstract public function duracaoEmMinutos(): int;
    
}