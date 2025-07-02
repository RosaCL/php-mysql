<?php
$stars ='';
$message = '';
$star_rating = [1,2,3,4,5,];

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $stars = $_POST['stars'];
    $valid = in_array($stars,$star_rating);
    $message = $valid ? 'Obrigada!' : 'Selecione uma opção';
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
            <?=$message;?>
            <form action="" method="post">
                <?php foreach($star_rating as $option){?>
                    <?=$option;?><input type="radio" name="stars" value="<?=$option;?>"<?=($stars==$option) ? 'checked': ''?>>                    
                <?php }?>
                <input type="submit" value="Enviar" class="btn">
            </form>
        </div>

    </section>
    <?php include './includes/footer.php'?>
</body>
</html>
