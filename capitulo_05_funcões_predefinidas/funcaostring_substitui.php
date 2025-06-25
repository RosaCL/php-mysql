<?php
$text='/images/uploads/';
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
            <p>
                <b>Remove '/' da esquerda e direita</b>
                <?=trim($text, '/')?><br>

                <b>Remove '/' a esquerda</b>
                <?=ltrim($text, '/')?><br>

                <b>Remove 's/' da direita</b>
                <?=rtrim($text, 's/')?><br>

                <b>Substitui 'images' por 'img'</b>
                <?=str_replace('images', 'img', $text)?><br>

                <b>Substitui 'IMAGES' por 'img' sem diferenciar maíuscula de mínuscula</b>
                <?=str_ireplace('IMAGES','img',$text)?><br>

                <b>Repete a string</b>
                <?=str_repeat($text,2)?>
            </p>
        </div>

    </section>
    <?php include './includes/footer.php'?>
</body>
</html>
