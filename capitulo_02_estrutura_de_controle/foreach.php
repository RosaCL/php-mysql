<?php
$products = ['Caramelo' => 3.99,
            'Pastilha' => 2.99,
            'Pirulito' =>1.99
];
$best_seller= ['Chocolate',
                'Caramelo',
                'Pirulito',
                'Pastilha',
                'Biscoito'

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
        <h2>Lista de preços</h2>
        <table>
            <tr>
                <th>Item</th>
                <th>Preço</th>
            </tr>
            <?php foreach ($products as $item => $price) {?>
                <tr>
                    <td><?=$item?></td>
                    <td><?=$price?></td>
                </tr>
            <?php }?>
        </table>
        <h1>Os mais vendidos</h1>
        <?php foreach ($best_seller as $candy){?>
            <p><?=$candy?></p>
        <?php }?>

        
    </section>
    
</body>
</html>