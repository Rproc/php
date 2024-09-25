<?php
// Fibonacci

// $usuario = readline("Digite um número: ");
$anterior = 1;
$atual = 2;
$proximo = $atual + $anterior;
echo $anterior . "\n";
echo $atual . "\n";
echo $proximo . "\n";
for ($i = 0; $proximo <= 2000; $i++) {
    $anterior = $atual;
    $atual = $proximo;
    $proximo = $atual + $anterior;

    echo "$proximo\n";
}
?>