<?php
$nutrition = [
    'gordura'=>30,
    'acucar'=>8.3,
    'sal'=>0,
    'proteina'=>2.6,
    'fibra'=>2.1
];
$best_seller=[
    'Chocolate',
    'Caramelo',
    'Jujuba',
    'Pirulito',
    'Marshmellow'
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Candy Store</title>
    <link rel="stylesheet" href="./ressources/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section class="hero" id="hero">        
        <h1>The Candy Store</h1>    
        <h2>Valor nutricional do seu doce:</h2>
        <p>Gordura:<?php echo $nutrition['gordura'];?>%</p>
        <p>Açucar:<?php echo $nutrition['acucar'];?>%</p>
        <p>Sal:<?php echo $nutrition['sal'];?></p>
        <p>Proteina:<?php echo $nutrition['proteina'];?>%</p>
        <p>Fibra:<?php echo $nutrition['fibra'];?>%</p>
        <h2>Os mais vendidos</h2>
        <ul>
            <li><?php echo $best_seller[0];?></li>
            <li><?php echo $best_seller[1];?></li>
            <li><?php echo $best_seller[3];?></li>
        </ul>
    </section>
</body>
</html>