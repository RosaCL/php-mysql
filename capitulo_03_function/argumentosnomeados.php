<?php
function calculate_cost($cost, $quantity, $discout = 0, $tax = 20){
    $cost = $cost* $quantity;
    $tax = $cost * ($tax/100);
    return ($cost + $tax) - $discout;
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candy Shop</title>
    <link rel="stylesheet" href="./ressources/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <?php require 'includes/header.php'; ?>
    <section class="hero">
        <h1> Candy Shop</h1>
        <h2>Chocolates</h2>
        <p>Chocolate amargo: R$ <?= calculate_cost(quantity: 10, cost:10, tax:5, discout:2)?></p>
        <p>Chocolate ao leite: R$ <?= calculate_cost(quantity: 10, cost:10, tax:5)?></p>
        <p>Chocolate branco: R$ <?= calculate_cost(5, 10, tax:5)?></p>



    </section>
    <?php include 'includes/footer.php'; ?>
</body>

</html>