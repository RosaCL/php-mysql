<?php
$username='Rosa';
$greeting='Olá, '. $username . '.';
$offer = [
    'item' =>'Chocolate',
    'qty' => 5,
    'price' => 5,
    'discount' =>4
];
$usual_price = $offer['qty'] * $offer['price'];
$offer_price = $offer['qty'] * $offer['discount'];
$saving = $usual_price -$offer_price;


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
    <h2>Sua oferta</h2>
    <p><?= $greeting?></p>
    <p>Você está economizando R$ <?=$saving?></p>    
    <p>Comprando <?=$offer['qty']?> pacotes de <?=$offer['item']?>  por R$<?=$offer_price?> (seu preço normal é R$ <?=$usual_price?>)</p>

    
</body>
</html>