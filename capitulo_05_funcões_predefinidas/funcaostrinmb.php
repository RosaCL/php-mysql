<?php
$text ='Total:€444'
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
            <b>Número de caracteres usando <code>strlen():</code></b>
            <?=strlen($text)?><br>
            <b>Número de caracteres usando <code>mb_strlen():</code></b>
            <?=mb_strlen($text)?><br>
            <b>Encontra pela primeira vez 444 <code>strpos():</code></b>
            <?=strpos($text,'444')?><br>
            <b>Encontra pela primeira vez 444 <code>mb_strpos():</code></b>
            <?=mb_strpos($text,'444')?><br>
        </div>

    </section>
    <?php include './includes/footer.php'?>
</body>
</html>
