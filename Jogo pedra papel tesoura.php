<!-- Este arquivo é para caso o usuario tenha escolhido o nivel de jogo medio ao qual ele ira jogar contra um bot que joga com numeros aleatorios -->
<!-- 1 = Tesoura
2 = Papel
3 = Pedra -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="pedra_e_papel.png" rel="icon" type="icon">
    <link href="style.css" rel="stylesheet"  type="text/css">
    <title>JOKENPO</title>
</head>
<body>
    <form method="post">
        <fieldset>
    <input type="radio" value="tesoura" name="op">Tesoura<br>
    <input type="radio" value="papel" name="op">Papel<br>
    <input type="radio" value="pedra" name="op">Pedra<br>
    <input type="submit" value="jogar"><br><br>
    <a href="bem_vindo.php">Voltar</a>
</fieldset>
</form>
<?php
if(isset($_POST['op'])){
$bot= rand(1,3);
$user=$_POST['op'];

if($user == 'tesoura'){
    if($bot == 1){
     echo "O bot escolheu Tesoura deu empate!";
    }
    if($bot == 2){
    echo "O bot escolheu Papel você ganhou!";
    }
    if($bot == 3){
    echo "O bot escolheu Pedra você perdeu!";
    }
}else if($user == 'papel'){
if($bot == 1){
     echo "O bot escolheu Tesoura você perdeu!";
    }
    if($bot == 2){
    echo "O bot escolheu Papel deu empate!";
    }
    if($bot == 3){
    echo "O bot escolheu Pedra você ganhou!";
    }
}else if($user == 'pedra'){
    if($bot == 1){
        echo "O bot escolheu Tesoura você ganhou!";
       }
       if($bot == 2){
       echo "O bot escolheu Papel você perdeu!";
       }
       if($bot == 3){
       echo "O bot escolheu Pedra deu empate!";
       }
}
}
?>
    
</body>
</html>