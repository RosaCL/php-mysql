<?php
$stock=25;
if($stock>=10){
    $message = 'Tem em estoque';

}
if($stock>0 && $stock<10){
    $message='Estoque em baixa.';
}
if ($stock==0){
    $message='Não tem no estoque';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Candy Store</title>
    <link rel="stylesheet" href="./ressources/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section class="hero">
        <?php require_once 'includes/header.php';?>
        
        <h2>Chocolate</h2>
        <p><?=$message?></p>
        <?php include 'includes/footer.php';?>
        </body>

    </section>
</html>