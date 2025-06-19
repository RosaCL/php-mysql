<?php
$us_price = 4;
$rates = [
    'uk' => 0.81,
    'eu' => 0.93,
    'jp' => 113.21,
    'br' =>5.51
];
function calculate_prices($usd, $exchange_rates)
{
    $prices = [
        'pound' => $usd * $exchange_rates['uk'],
        'euro' => $usd * $exchange_rates['eu'],
        'yen' => $usd * $exchange_rates['jp'],
        'real' => $usd * $exchange_rates['br']
    ];
    return $prices;
}

$global_prices = calculate_prices($us_price, $rates);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candy Shop</title>
    <link rel="stylesheet" href="./ressources/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <?php require 'includes/header.php'; ?>
    <section class="hero">
        
        <h2>Chocolates</h2>
        <p>US $ <?=$us_price?></p>
        <p>(UK &pound; <?= $global_prices['pound']?> | 
        EU &euro; <?= $global_prices['euro']?> | 
        JP &yen; <?= $global_prices['yen']?>|
        BR &real; <?= $global_prices['real']?>
        )
    
    
    </p>


    </section>
    <?php include 'includes/footer.php'; ?>
</body>

</html>