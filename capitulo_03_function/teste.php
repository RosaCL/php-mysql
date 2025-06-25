<?php
declare (strict_types=1);
$candy = [
    'Caramelo' => ['price' => 3.00, 'stock' =>12],
    'Bala de hortelã' => ['price' => 2.00, 'stock' =>26],
    'Fudge' => ['price' => 4.00, 'stock' =>8],
    'Chocolate' => ['price' => 8.00, 'stock' =>3],
];

$tax = 20;

function stock_level(int $stock):string{
    if ($stock>=10){
        return 'Não';
    }else{
        return 'Sim';
    }

}

function stock_value(float $price, int $quantity):float{
    return $price*$quantity;

}
function tax_pay(float $price, int $quantity, int $tax=0): float{
    return ($price * $quantity) * ($tax/100);
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
        <h1>Candy Shop</h1>
        <h2>Controle de Estoque</h2>
        <table>
            <tr>
                <th>Produto</th>
                <th>Estoque</th>
                <th>Reestocar</th>
                <th>Valor total</th>
                <th>Imposto</th>
            </tr>
            <?php foreach( $candy as $product=>$data) {?>
            <tr>
                <td><?=$product?></td>
                <td><?=$data['stock']?></td>
                <td><?=stock_level($data['stock'])?></td>
                <td>R$ <?=stock_value($data['price'], $data['stock'])?></td>
                <td>R$ <?=tax_pay($data['price'],$data['stock'],$tax)?></td>

            </tr>
            <?php }?>
        </table>


    </section>
    <?php include 'includes/footer.php'; ?>
</body>

</html>