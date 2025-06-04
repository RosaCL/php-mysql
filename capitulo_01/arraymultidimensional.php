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
    <title>The Candy Store</title>
    <link rel="stylesheet" href="./ressources/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section class="hero" id="hero">

        <h1>The Candy Store</h1>
        <h2>Ofertas</h2>
        <p><?php echo $offers[0]['poduct'];?> - R$<?php echo $offers[0]['price'];?> </p>
        <p><?php echo $offers[1]['poduct'];?> - R$<?php echo $offers[1]['price'];?> </p>
        <p><?php echo $offers[2]['poduct'];?> - R$<?php echo $offers[2]['price'];?> </p>
        <p><?php echo $offers[3]['poduct'];?> - R$<?php echo $offers[3]['price'];?> </p>
    </section>

</body>
</html>