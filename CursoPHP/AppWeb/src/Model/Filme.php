<?php

// a classe filme herda as caracteristocas do Titulo
class Filme extends Titulo {
    public function __construct (
        public readonly int $duracaoEmMinutos,
    ) {
    }

}

