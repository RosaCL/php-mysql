<?php
$settings['flags'] = FILTER_FLAG_ALLOW_HEX;
$settings['options']['min_range'] = 0;
$settings['options']['max_range'] = 255;

$number = filter_input(INPUT_POST,'number', FILTER_VALIDATE_INT,$settings);
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
            <form action="flagoptionfilter.php" method="post">
                Número: <input type="text" name="number" value="<?=htmlspecialchars((string)$number);?>">
                <input type="submit" value="Salvar" class="btn">
            </form>
            <?php var_dump($number);?>
        </div>

    </section>
    <?php include './includes/footer.php'?>
</body>
</html>
