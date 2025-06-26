<?php
//array com valor aleátorio
$saudacoes = [
'Oi ',
'Olá ', 
'Hello ',
'Ciao ',
'Holla ',
];

$saudacao_key = array_rand($saudacoes);

$saudacao=$saudacoes [$saudacao_key];

$bestseller = [
    'Computador',
    ' Pincel',
    ' Tinta',
    ' Quadro',
];
$bestseller_count = count($bestseller);

$bestseller_text = implode(',', $bestseller);

$customer = [
    'name' => 'Ivy',
    'lastaname' => 'Stone',
    'email' => 'ivy@g.com',
];

if (array_key_exists('name', $customer)){
    $saudacao .= $customer ['name'];
}


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
            <h1>Os mais vendidos</h1>
            <p><?= $saudacao?></p>
            <p>O top <?=$bestseller_count?> de vendas hoje: <b><?=$bestseller_text?></b></p>
        </div>

    </section>
    <?php include './includes/footer.php'?>
</body>
</html>
