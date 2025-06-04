<?php
$item='Chocolate';
$stock=8;
$wanted=5;
$can_buy=($wanted<=$stock);



?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variavel</title>
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Carrinho</h2>
    <p>Item:<?=$item?></p>
    <p>Estoque:<?=$stock?></p>
    <p>Quer:<?=$wanted?></p>
    <p>Posso comprar?<?=$can_buy?></p>
    
</body>
</html>