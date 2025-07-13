<?php

/*
O programa deve funcionar como um sistema de controle de saldo bancário, permitindo que o usuário realize algumas operações básicas. 
Aqui está um resumo de como ele deve operar:

Exibição do Menu: O programa deve exibir um menu com as seguintes opções:

Consultar saldo atual
Sacar valor
Depositar valor
Sair
Interação com o Usuário: O programa deve aguardar a entrada do usuário, que deve escolher uma das opções do menu 
digitando o número correspondente.

Operações:

-Consultar Saldo: Ao selecionar essa opção, o programa deve mostrar o saldo atual da conta.
-Sacar Valor: O usuário deve ser solicitado a informar o valor que deseja sacar. O programa deve verificar se há saldo suficiente. 
Se houver, o valor deve ser subtraído do saldo; caso contrário, uma mensagem de "saldo insuficiente" deve ser exibida.
-Depositar Valor: O usuário deve ser solicitado a informar o valor que deseja depositar. Esse valor deve ser adicionado ao saldo.
-Sair: Ao escolher essa opção, o programa deve encerrar a execução e exibir uma mensagem de despedida.
-Validação de Entrada: Se o usuário digitar uma opção que não está no menu, o programa deve exibir uma mensagem de "opção inválida" e retornar ao menu.

Loop de Execução: O programa deve continuar exibindo o menu e permitindo que o usuário faça operações até que ele escolha a opção de sair.

Com essas funcionalidades, o programa se torna um sistema básico de controle de saldo bancário.

*/


$saldoAtual = 5000;
$titularConta = 'Gustavo Caris';

// Menu inicial
echo "***************************\n";
echo "Titular: $titularConta\n";
echo "Saldo Atual: R$ $saldoAtual\n";
echo "***************************\n";

// nossas opçõeszinhas
echo "Opção 01: Consultar saldo atual\n";
echo "Opção 02: Sacar valor\n";
echo "Opção 03: Depositar valor\n";
echo "Opção 04: Sair\n";

// Isso qui é pra capturar o input do usuario F.file GET.pegar S.string que seria nossa variavel
$opcao = (int) fgets (STDIN);

switch ($opcao) {
    case 1:
        echo "***************************\n";
        echo "Titular: $titularConta\n";
        echo "Saldo Atual: R$ $saldoAtual\n";
        echo "***************************\n";
        break;
    case 2:
        echo "Qual valor deseja sacar?\n";
        $valorSaque = (float) fgets (STDIN);
        if ($valorSaque <= $saldoAtual) {
            echo "Saque realizado com sucesso!\n";
            $saldoAtual = $saldoAtual - $valorSaque;
        } else {
            echo "Saldo insuficiente!\n";
        }
        break;
    case 3:
        echo "Qual valor deseja depositar?\n";
        $valorDeposito = (float) fgets (STDIN);
        $saldoAtual = $saldoAtual + $valorDeposito;
        echo "Depósito realizado com sucesso!\n";
        break;
    case 4:
        echo "Até logo futuro milionario...\n";
        break;
    default:
        echo "Opção inválida!\n";
        break;
}


        

