<?php
$text='Using PHP\'s regular expression functions';
$path= 'code/section_b/c05/';

$match = preg_match('/PHP/', $text);
$path = preg_split('/\//', $path);
$text = preg_replace('/PHP/', '<em>PHP</em>',$text);

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
            <p>
                <b>Foi encontrado?</b><br>
                <?=($match===1) ? 'Sim' : 'Não'?><br>
    
                <b>Partes de um caminho:</b><br>
                <?php foreach($path as $part){?>
                    <?=$part?><br>
                <?php }?>

                <b>Atualizando o texto:</b> <br>
                <?=$text?>



            </p>
        </div>

    </section>
    <?php include './includes/footer.php'?>
</body>
</html>
