<?php
$order = [
    'Caderno',
    'Pincel',
    'Borracha',
];
//add intem a array
array_unshift($order, 'Tesoura');
//remove o último item
array_pop($order);
//coverte em string
$items = implode(', ', $order);

$classes = [
    'Colcha de retalhos' => '12 de abril',
    'Tricô' => '4 de maio',
    'Lettering' => '18 de maio',
];
//remove 1 item da array
array_shift($classes); 
//add no final
$new = [
    'Origami' =>'5 de junho',
    'Acolchoado' => '23 de junho',
];
$classes = array_merge($classes, $new);

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
