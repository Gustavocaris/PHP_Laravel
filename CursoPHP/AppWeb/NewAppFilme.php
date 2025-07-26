<?php


require __DIR__ . "/src/Model/ComAvaliacao.php";
require __DIR__ . "/src/Model/Avaliavel.php";
require __DIR__ . "/src/Model/Genero.php";
require __DIR__ . "/src/Model/Titulo.php";
require __DIR__ . "/src/Model/Serie.php";
require __DIR__ . "/src/Model/Filme.php";
require __DIR__ . "/src/calc/CalculadoraMaratona.php";
require __DIR__ . "/src/model/Episodio.php";
require __DIR__ . "/src/Calc/ConversorStars.php";

/*
Aqui eu poderia usar o NAMESSPACE, pra nmão dazer esse tanto de REQUIRE, mas eu deixei assim por enquato.
namespace>
Nós separamos arquivos em pastas e, no que se refere aos símbolos do PHP, podemos dividi-los em pastas lógicas. 
Elas são divisões lógicas que não exigem que movamos um arquivo de um lugar para outro.

Essa funcionalidade de separação lógica é chamada de Namespace. 
Um Namespace é, basicamente, uma forma de dizer que uma classe específica faz parte de um pacote, de uma pasta virtual, de um grupo de outras classes. 
Por exemplo, a classe Titulo faz parte de um grupo chamado "Modelo".
*/



echo "Bem Vindo a nossa aplicação Webfilme\n";

$filme = new Filme(
    'Thor ragnarok',
    '2021',
    Genero::SuperHeroi,
    180,
);

/*
$filme->nome = 'Thor ragnarok';
$filme->anoLancamento = '2021';
$filme->genero = 'Super-heroi';
$filme->nota = '8';
*/

$filme->avalia(1);
$filme->avalia(4.5);
$filme->avalia(5);
$filme->avalia(6.3);

var_dump($filme);

echo $filme->media() . ".\n";

echo $filme->anoLancamento . ".\n";

$serie = new Serie('Lost', 2007, Genero::Drama, 10, 20, 30);
$episodio = new Episodio($serie, 'Episódio piloto', 1);

echo $serie->anoLancamento . "\n";

$serie->avalia(8);

echo $serie->media() . "\n";

$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracao = $calculadora->duracao();

echo "Para essa maratona, você precisa de $duracao minutos";

$conversor = new ConversorNotaEstrela();
echo $conversor->converte($serie);



?>