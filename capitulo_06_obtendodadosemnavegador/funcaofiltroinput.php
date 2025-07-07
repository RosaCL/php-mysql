<?php
$location =filter_input(INPUT_GET,'city');
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
            <a href="filter_input.php?city=London">London</a>
            <a href="filter_input.php?city=Sydney">Sydney</a>
            <pre><?php var_dump($location);?></pre>
            
        </div>

    </section>
    <?php include './includes/footer.php'?>
</body>
</html>
