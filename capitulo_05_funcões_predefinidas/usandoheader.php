<?php
$logged_in = false;

if($logged_in==false){
    header('Location: login.php');
    exit;
}
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
            <h1>Área do usuário</h1>
            <p>Bem-vindo a área do usuário!</p>         
        </div>

    </section>
    <?php include './includes/footer.php'?>
</body>
</html>
