<?php
$cities = [
    'Maceió' => 'Rua Alegria, 48',
    'Recife' => 'Rua Felicidade, 59',
    'Natal' => 'Rua Feliz, 320',
];

$city = $_GET['city'] ?? '';
$valid = array_key_exists($city, $cities);

if (!$valid) {
    http_response_code(404);
    header('Location: page-not-found.php');
    exit;
}
$adress = $cities [$city];
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
            <?php foreach ($cities as $key => $dado){?>
                <a href="get-2.php?city=<?= $key?>"><?=$key?></a>
            <?php }?>
            <h1><?=$city?></h1>
            <p><?=$adress?></p>
        </div>

    </section>
    <?php include './includes/footer.php'?>
</body>
</html>
