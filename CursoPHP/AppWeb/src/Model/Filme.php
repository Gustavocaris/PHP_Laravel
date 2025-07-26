<?php

// a classe filme herda as caracteristocas do Titulo
class Filme extends Titulo {

    public function __construct (
        string $nome,
        int $anoLancamento,
        Genero $genero,
        int $duracaoEmMinutos
    ) {
        parent::__construct(
            $nome,
            $anoLancamento,
            $genero,
            $duracaoEmMinutos
        );
    }

    public function duracaoEmMinutos(): int
    {
        return $this->duracaoEmMinutos;
    }

}

