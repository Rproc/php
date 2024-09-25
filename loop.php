<?php
// usuário digitará um número e a aplicação
// completará o número digitado até cem.

$usuario = readline("Digite um número: ");
// echo $usuario;

for ($i = $usuario; $i <= 100; $i++) {
    echo "$i\n";
}
?>