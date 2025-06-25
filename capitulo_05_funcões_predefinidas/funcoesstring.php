<?php
$text = 'PHP e MySQL';
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
                    <b>Mínuscula:</b>
                    <?=strtolower($text)?><br>
                    <b>Maíuscula:</b>
                    <?=strtoupper($text)?><br>
                    <b>Primeiras letra de cada palavara maíuscula:</b>
                    <?=ucwords($text)?><br>
                    <b>Número de letras:</b>
                    <?=strlen($text)?><br>
                    <b>Número de palavras:</b>
                    <?=str_word_count($text)?>
            </p>
        </div>

    <pre></section></pre>
    <?php include './includes/footer.php'?>
</body>
</html>
