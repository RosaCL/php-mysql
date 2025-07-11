<?php
function logo(){
    return '<img src="./ressources/img/candylogo.png" alt="logo">';
}
function copywrite(){
    $year = date('Y');
    $message = 'Candy Shop &copy;' . $year;
    return $message;
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
<header>
    <h1><?= logo();?> Candy Shop</h1>
</header>
<section class="hero">
    <article>
        <h2>Bem-vindo a Candy Shop</h2>
    </article>

</section>
<footer>
    <?= logo();?>
    <?= copywrite();?>
</footer>

</body>
</html>