<?php
$items=10;
$cost=3;
$subtotal=$cost*$items;
$tax=($subtotal/100)*20;
$total= $subtotal+$tax;

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
    <h2>Seu carrinho</h2>
    <p>Itens: <?=$items?></p>
    <p>Valor: R$ <?=$cost?></p>
    <p>Sub-total: R$ <?=$subtotal?></p>
    <p>Taxas: R$ <?=$tax?></p>
    <p>Total: R$ <?=$total?></p>

    
</body>
</html>