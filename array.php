<?php

$lista = ["Café", "Açucar", "Manteiga", "Pão"];
array_push($lista, "Queijo");
// for($i=0; $i<count($lista); $i++){
//     echo "$lista[$i]\n";
// }
sort($lista);
// Inserir Presunto porém de forma que continue ordenado
// array_splice(1, 2, 3, 4)
// 1. Sua lista
// 2. Posição que vc quer inserir
// 3. Quer remover elementos? Se não quiser, coloque 0
// 4. Elemento que vc quer inserir
array_splice($lista, 4, 0, "Presunto");
foreach ($lista as $item) {
    print "$item\n";
}
$ultimo = array_pop($lista);
// echo $ultimo


?>