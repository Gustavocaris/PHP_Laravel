<?php

// Uma enum é um tipo que nos permite listar todos os valores possíveis. No caso do gênero, teremos valores como ação, comédia, terror, super-herói, drama, entre outros. 
// Usaremos um padrão de nomenclatura similar ao das classes: a primeira letra de cada palavra em maiúscula.
enum Genero {
    case Acao;
    case Comedia;
    case Terror;
    case SuperHeroi;
    case FiccaoCientifica;
    case Animacao;
    case Outros;
}


