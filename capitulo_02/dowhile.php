<?php
$packs = 10;
$price = 2.99;

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
        <h2>Ofertas da dia</h2>
        <p>
            <?php
            do{
                echo $packs;
                echo ' - pacote custa R$';
                echo $price * $packs;
                echo '<br>';
                $packs--;
            } while ($packs>0);
            ?>
        </p>       
    </section>
    
</body>
</html>