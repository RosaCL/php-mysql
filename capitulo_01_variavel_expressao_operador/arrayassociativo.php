<?php

$menber = [
    'nome'=>'Rosa',
    'age'=> 39,
    'country'=>'Brasil',
    'state'=>'Alagoas'
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
    <?php require 'includes/header.php';?>
    <section class="hero" id="hero">
        <h1>The Candy Store</h1>
        <h2>Bem-vinda <?php echo $menber['nome'];?>, a nossa loja do <?=$menber['country']?></h2>        
    </section>
    <?php include 'includes/footer.php';?>
    
</body>
</html>