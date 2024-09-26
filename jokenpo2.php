<?php
$jogador1 = readline("Faça sua jogada: ");
// $jogador2 = readline("Faça sua jogada: ");
$jogadas = ["Pedra", "Papel", "Tesoura"];
$jogador2 = $jogadas[array_rand($jogadas)];
echo "$jogador2 \n";

if( ($jogador1 === "Pedra" && $jogador2 === "Tesoura") ||
($jogador1 === "Tesoura" && $jogador2 === "Papel") ||
($jogador1 === "Papel" && $jogador2 === "Pedra") ){
    echo "Jogador 1 Ganhou!\n";
}
else if ($jogador1 === $jogador2){
    echo "Empate\n";
}
else{
    echo "Jogador 2 Ganhou!\n";
}

?>