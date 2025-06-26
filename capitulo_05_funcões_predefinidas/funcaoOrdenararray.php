<?php
$order = [
    'Caderno',
    'Pincel',
    'Tesoura',
    'Borracha',
    'Tinta',
    'Fita adesiva',
];
//classificação ascedente
sort($order);
$items = implode(', ', $order);

$classes = [
    'Colcha de retalhos' => '12 de abril',
    'Tricô' => '4 de maio',
    'Origami' =>'5 de junho',
];
//classifica por chave
ksort($classes);

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
            <h1>Pedido</h1>
            <?=$items?>

            <h1>Cursos</h1>
            <?php foreach ($classes as $description=>$date){?>
            </p> 
                <b><?= $description?></b> <?=$date?><br>
            <p>
                
            <?php }?>
        </div>

    </section>
    <?php include './includes/footer.php'?>
</body>
</html>
