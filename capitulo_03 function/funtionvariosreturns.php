<?php
$stock=0;

function get_stock_message($stock){
    if ($stock>=10){
        return 'Temos em estoque';
    }elseif($stock>0 && $stock<10){
        return 'Estoque em baixa';
    }else{
        return 'Estoque zerado';
    }
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
        <h2>Chocolates</h2>
        <p><?=get_stock_message($stock)?></p>


    </section>
    <?php include 'includes/footer.php'; ?>
</body>

</html>