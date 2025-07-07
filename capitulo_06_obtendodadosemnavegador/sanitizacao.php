<?php
$user['name']='Ivy <script src="js/bad.js"></script>';
$user['age'] = 23.75;
$user['email']= 'ªivy@eg.link/';

$saniteze_user ['name'] = FILTER_SANITIZE_FULL_SPECIAL_CHARS; 
$saniteze_user ['age'] = FILTER_SANITIZE_NUMBER_INT; 
$saniteze_user ['email'] = FILTER_SANITIZE_EMAIL; 

$user = filter_var_array($user, $saniteze_user);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Art Store</title>
    <link rel="stylesheet" href="./ressources/css/style.css">
</head>
<body>
    <?php include './includes/header.php' ?>
    <section>
        <div class="box">
            <p>Nome: <?=$user['name'];?></p>
            <p>Idade: <?=$user['age'];?></p>
            <p>E-mail: <?=$user['email'];?></p>
        </div>

    </section>
    <?php include './includes/footer.php'?>
</body>
</html>
