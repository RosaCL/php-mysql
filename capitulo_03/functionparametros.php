<?php
function calculate_total($price, $quantity){
    $cost = $price * $quantity;
    $tax = $cost * (20/100);
    $total = $cost + $tax;
    return $total;
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
    <?php require 'includes/header.php';?>
    <section class="hero">
        <h1>Candy Shop</h1>
        <p>Pastilha: R$ <?=calculate_total(2,5)?></p>
        <p>Caramelo: R$ <?=calculate_total(3,5)?></p>
        <p>Pirulito: R$ <?=calculate_total(5,4)?></p>
        <p>Chiclete: R$ <?=calculate_total(1.50,4)?></p>
    
        
    </section>
    <?php include 'includes/footer.php';?>
</body>
</html>