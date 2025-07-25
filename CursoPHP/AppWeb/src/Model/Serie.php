<?php

class Serie extends Titulos {

    public function __construct (
        public readonly int $temporadas,
        public readonly int $episodiosPorTemporada,
        public readonly int $minutosPorEpisodio,
    ) {
    }
}
