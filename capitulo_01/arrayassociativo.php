<?php

$menber = [
    'nome'=>'Rosa',
    'age'=> 39,
    'country'=>'Brasil',
    'state'=>'Alagoas'
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
    <h2>Bem-vinda <?php echo $menber['nome'];?>, a nossa loja do <?=$menber['country']?></h2>
    
</body>
</html>