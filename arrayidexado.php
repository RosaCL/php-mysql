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
    <title>Variavel</title>
</head>
<body>
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
</body>
</html>