<?php

function soma($a, $b){
    $a++;
    echo $a + $b;
}

function soma2($numero1, $numero2){
    return ($numero1 + $numero2);
}

$a = 1;
$b = 2;
$resultado = soma2($a, $b);
echo $resultado
// soma($a, $b)

// echo $a + $b;


?>