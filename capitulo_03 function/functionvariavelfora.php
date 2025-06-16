<?php
$tax_rate=0.2;

function calculate_totalacumulado($price, $quantity){
    global $tax_rate;
    static $totalacumulado = 0;

    $total = $price * $quantity;
    $tax = $total * $tax_rate;
    $totalacumulado = $totalacumulado + $total + $tax;
    return $totalacumulado;
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
        <table>
            <tr>
                <th>Item</th>
                <th>Preço</th>
                <th>Quatidade</th>
                <th>Total acumulado</th>
            </tr>
            <tr>
                <td>Pastilha:</td>
                <td>R$2</td>
                <td>5</td>
                <td>R$<?=calculate_totalacumulado(2,5);?></td>
            </tr>
            <tr>
                <td>Caramelo:</td>
                <td>R$3</td>
                <td>5</td>
                <td>R$<?=calculate_totalacumulado(3,5);?></td>
            </tr>
            <tr>
                <td>Pirulito:</td>
                <td>R$5</td>
                <td>4</td>
                <td>R$<?=calculate_totalacumulado(5,4);?></td>
            </tr>
        </table>

    
        
    </section>
    <?php include 'includes/footer.php';?>
</body>
</html>