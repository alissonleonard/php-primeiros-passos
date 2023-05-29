<?php


//funcionalidade de saque
function sacar(array $conta, $valorASacar) : array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar");
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

//end


//---------------------------FUNÇÕES-------------------------------------//


//função de exibir mensagem
function exibeMensagem(string $mensagem)
{
    echo $mensagem . '<br>';

}
//end

// função para depositar
function depositar(array $conta, float $valorADepositar): array
{
    if ($valorADepositar > 0) {
    $conta ['saldo'] += $valorADepositar;
    } else {
        exibeMensagem ("Depositos precisam ser positivos");
    }
    return $conta;

}
//end

//Função aumentar letra maiuscular

function TCLM (array &$conta)
{
    
    $conta ['titular'] = mb_strtoupper($conta['titular']);
   
}
//end

function exibeConta (array $conta)
{
        ['titular' => $titular, 'saldo' => $saldo] = $conta;
        echo "<li>Titular: $titular. Saldo: $saldo  </li>";

}