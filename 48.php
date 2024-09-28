<?php
// Digite 10 nomes de pessoas e seus bairros
// Imprima em ordem alfabetica pelo nome de pessoas 

$cadastro=[];
for($i=0; $i<4; $i++){

    $nome = readline('Digite seu nome: ');
    $bairro = readline('Digite seu bairro: ');
    array_push($cadastro, [$nome, $bairro]);
}
sort($cadastro);
foreach($cadastro as $pessoa){
    print($pessoa[0] . ", " . $pessoa[1] . "\n");
}
?>