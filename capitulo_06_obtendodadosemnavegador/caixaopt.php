<?php
    $therms ='';
    $message = '';


    if($_SERVER['REQUEST_METHOD']=='POST'){
        $therms = (isset($_POST['therms']) && $_POST['therms'] == 'true') ? true : false;
        $message = $therms ? 'Obrigada!' : 'Você concordou com os termos e condições';
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
        <div class="box-nc">
            <?=$message;?>
            <form action="" method="post">
                Eu concordo com os termos e condições: <input type="checkbox" name="therms" value="true" <?=$therms ? 'checked': ''?>>
                <input class="btn" type="submit" value="Enviar">
            </form>
        </div>

    </section>
    <?php include './includes/footer.php'?>
</body>
</html>
