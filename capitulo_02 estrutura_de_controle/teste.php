<?php
$name='Rosa';
$greting='Olá, ';
if ($name){
    $greting = 'Bem-Vinda de volta ' . $name; 
}
$product ='Caramelo';
$cost=10;

for($i=1; $i<=20; $i++){
    $subtotal=$cost * $i;
    $discount= ($subtotal/100 *$i*4);
    $total[$i]=$subtotal-$discount;
}
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
    <?php require 'includes/header.php';?>
    <section class="hero">
        <?=$greting?>
        <h2><?=$product?> com descontos</h2>
        <table>
            <tr>
                <th>Pacote</th>
                <th>Preço</th>
            </tr>
            <?php foreach($total as $quantity =>$price) {?>
            <tr>
                <td>
                    <?=$quantity?>
                    Pacote <?=($quantity===1) ? '' :'s';?>
                </td>
                <td>
                    R$ <?=$price?>
                </td>
            </tr>
            <?php }?>
        </table>
    
        
    </section>
    <?php include 'includes/footer.php';?>
</body>
</html>