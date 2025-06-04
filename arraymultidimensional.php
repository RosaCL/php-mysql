<?php
$offers=[
    ['poduct'=>'Caramelo', 'price'=>5, 'stock'=> 120],
    ['poduct'=>'Mentos', 'price'=>3, 'stock'=> 66],
    ['poduct'=>'Pirulito', 'price'=>4, 'stock'=> 97],
    ['poduct'=>'Chocolate', 'price'=>2, 'stock'=> 83]
];

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
    <h2>Ofertas</h2>
    <p><?php echo $offers[0]['poduct'];?> - R$<?php echo $offers[0]['price'];?> </p>
    <p><?php echo $offers[1]['poduct'];?> - R$<?php echo $offers[1]['price'];?> </p>
    <p><?php echo $offers[2]['poduct'];?> - R$<?php echo $offers[2]['price'];?> </p>
    <p><?php echo $offers[3]['poduct'];?> - R$<?php echo $offers[3]['price'];?> </p>

</body>
</html>