<?php
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
                <b>Arredondar:</b> <?= round(9876.54321)?> <br>
                <b>Arredondar para duas casas decimais:</b> <?= round(9876.54321,2)?><br>
                <b>Arredondar para cima 1.5:</b> <?= round(1.5, 0, PHP_ROUND_HALF_UP)?><br>
                <b>Arredondar para baixo 1.5:</b> <?= round(1.5, 0, PHP_ROUND_HALF_DOWN)?><br>
                <b>Arredondar para cima 1.23:</b> <?= ceil(1.23)?><br>
                <b>Arredondar para baixo 1.23:</b> <?= floor(1.23)?><br>
                <b>Número aleatório entre (0-10):</b> <?= mt_rand(0,10)?><br>
                <b>Exponencial 4 elevado a 5:</b> <?= pow(4,5)?><br>
                <b>Raiz quadrada de 16:</b> <?= sqrt(16)?><br>
                <b>É um número (123):</b> <?= is_numeric(123)?><br>
                <b>Formatar o número 12345.6789 em duas casa decimais, no lugar de . será vírgula:</b> <?= number_format(12345.6789, 2, ',','')?><br>
            </p>
            
        </div>

    </section>
    <?php include './includes/footer.php'?>
</body>
</html>
