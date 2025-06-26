<?php
$path = './ressources/img/costureza.png';
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
    <?php include './includes/header.php'; ?>
    <section>
        <div class="box">
            <?php if (file_exists($path)){?>
                <p>
                    <b>Nome:</b> <?= pathinfo($path, PATHINFO_BASENAME)?> <br>
                    <b>Tamanho:</b> <?= filesize($path) ?>bytes <br>
                    <b>Tipo de mídia:</b> <?= mime_content_type($path)?> <br>
                    <b>Arquivo:</b> <?= pathinfo($path, PATHINFO_DIRNAME)?> <br>
                </p>
                
            <?php }else{?>
                <p>Este aquivo não existe</p>
            <?php }?>
        </div>

    </section>
    <?php include './includes/footer.php';?>
</body>
</html>
