<?php

// 1. Exibindo mensagens com o echo
echo "Bem-vindo ao mundo PHP!";
echo "Este é um exemplo com funcionalidades básicas.<br><br>";

// 2. Declaração de variáveis
// Em PHP, todas as variáveis começam com o símbolo "$" -> tipos de variaveis :

$nome = "Gustavo";          // String (texto)
$idade = 25;                // Integer (número inteiro)
$peso = 81.5;               // Float (número com casa decimal)
$trabalha = true;           // Booleano (true/false)

// 3. Concatenando variáveis com strings
echo "Meu nome é " . $nome . ", tenho " . $idade . " anos e peso " . $peso . " kg.<br>";

// 4. Interpolação de variáveis dentro de aspas duplas
echo "Trabalho atualmente? $trabalha <br>"; // true será convertido para "1"

// Para tornar a resposta mais legível:
echo "Trabalho atualmente? " . ($trabalha ? "Sim" : "Não") . "<br><br>";

// 5. Operadores aritméticos
$anoAtual = 2025;
$anoNascimento = $anoAtual - $idade;
echo "Nasci no ano de $anoNascimento.<br><br>";

// 6. Estruturas condicionais
if ($idade >= 18) {
    echo "Você é maior de idade.<br>";
} else {
    echo "Você é menor de idade.<br>";
}

// 7. Operadores de comparação e lógicos
$salario = 2500;

if ($salario > 2000 && $trabalha) {
    echo "Você está empregado e ganha mais que R$2000.<br>";
} else {
    echo "Situação financeira pode melhorar.<br>";
}

// 8. Estruturas de repetição

// For loop
echo "<br><strong>Contagem de 1 a 5 (for):</strong><br>";
for ($i = 1; $i <= 5; $i++) {
    echo "Número: $i<br>";
}

// While loop
echo "<br><strong>Contagem regressiva (while):</strong><br>";
$contador = 5;
while ($contador > 0) {
    echo "Faltam: $contador<br>";
    $contador--;
}

// 9. Arrays (vetores)
$frutas = ["Maçã", "Banana", "Laranja"];

echo "<br><strong>Lista de frutas:</strong><br>";
foreach ($frutas as $fruta) {
    echo "- $fruta<br>";
}

// 10. Funções
function saudacao($nomeUsuario) {
    return "Olá, $nomeUsuario! Seja bem-vindo.<br>";
}

echo "<br>" . saudacao($nome);

// 11. Constantes
define("PI", 3.14159);
echo "O valor de PI é aproximadamente " . PI . "<br>";

// 12. Superglobais (exemplo básico)
echo "<br><strong>Informações do servidor:</strong><br>";
echo "Você está acessando o arquivo: " . $_SERVER["PHP_SELF"] . "<br>";
echo "Host: " . $_SERVER["HTTP_HOST"] . "<br>";

?>


