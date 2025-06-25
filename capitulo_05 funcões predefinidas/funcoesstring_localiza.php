<?php
$text = 'Home sweet home';
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
                    <b>Primeira Correspondência:</b>
                    <?=strpos($text, 'ho')?><br>

                    <b>Primeira Correspondência (diferenciando maísucula e minuscula):</b>
                    <?=stripos($text, 'me', 5)?><br>

                    <b>Última Correspondência (diferenciando maísucula e minuscula):</b>
                    <?=strrpos($text, 'Ho')?><br>

                    <b>Última Correspondência (sem diferenciar maísucula e minuscula):</b>
                    <?=strripos($text, 'Ho')?><br>

                    <b>Primeira Correspondência da sbstring (diferenciando maísucula e minuscula):</b>
                    <?=strstr($text, 'ho')?><br>

                    <b>Primeira Correspondência da sbstring (sem diferenciarmaísucula e minuscula):</b>
                    <?=stristr($text,'ho')?><br>
                    
                    <b>Texto entre duas posições</b>
                    <?=substr($text, 5, 5)?>
            </p>
        </div>

    <pre></section></pre>
    <?php include './includes/footer.php'?>
</body>
</html>
