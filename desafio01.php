<?php

$saldo = 1000.50;

menu();

function menu() {
    
    global $saldo;

    echo "Titular: Raphael Ferraz\n";
    echo "Saldo: $saldo\n\n";

    echo "1. Consultar saldo\n";
    echo "2. Sacar Valor\n";
    echo "3. Depositar Valor\n";
    echo "4. Sair\n\n";
    
    echo "Digite a opção escolhida: ";

    $opcao = fgets(STDIN);

    switch ($opcao) {
        case 1: popen('cls', 'w'); menu();
            break;
        case 2: sacarValor();
            break;
        case 3: depositarValor();
            break;
        case 4: echo "Encerrando aplivativo...";
            break;
        default: popen('cls', 'w'); echo "Opção inválida, tente novamente!\n\n"; menu();
    }
} 

function sacarValor() {
    global $saldo;

    echo "Digite o valor que deseja sacar: ";
    $valorParaSaque = (float) fgets(STDIN);

    if ($valorParaSaque > $saldo) {
       popen('cls', 'w'); 
       echo "Saldo insuficiente para saque, tente novamente!\n\n"; 
       menu();
    } else {
        $saldo = $saldo - $valorParaSaque;
        popen('cls', 'w'); 
        echo "Saque de R$$valorParaSaque realizado com sucesso!\n\n";
        menu();
    }
}

function depositarValor() {
    global $saldo;

    echo "Digite o valor que deseja depositar: ";
    $valorParaDeposito = (float) fgets(STDIN);
    $saldo = $saldo + $valorParaDeposito;
    popen('cls', 'w');
    echo "Depósito de R$$valorParaDeposito realizado com sucesso!\n\n";
    menu();
}
