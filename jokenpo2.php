<?php
$jogador1 = readline("Faça sua jogada: ");
// $jogador2 = readline("Faça sua jogada: ");
$jogadas = ["Pedra", "Papel", "Tesoura"];
$jogador2 = $jogadas[array_rand($jogadas)];
echo "$jogador2 \n";

if( ($jogador1 === "Pedra" && $jogador2 === "Tesoura") &&
($jogador1 === "")
)

?>