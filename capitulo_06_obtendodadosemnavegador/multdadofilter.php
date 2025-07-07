<?php
$form['email'] = '';
$form['age'] = '';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $filter ['email'] = FILTER_VALIDATE_EMAIL;
    $filter ['age']['filter'] = FILTER_VALIDATE_INT;
    $filter ['age']['options'] ['min_range'] = 16;
    $form = filter_input_array(INPUT_POST,$filter);
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
            <form action="" method="post">
                Email: <input type="email" name="email" value="<?=htmlspecialchars($form['email']);?>">
                Idade: <input type="text" name="age" value="<?=htmlspecialchars($form['age'])?>">
                <p>Eu concordo com os termos e condições: <input type="checkbox" name="terms" value="1"></p>
                <input type="submit" value="Enviar" class="btn">
            </form>
            <pre><?php var_dump($form)?></pre>
        </div>

    </section>
    <?php include './includes/footer.php'?>
</body>
</html>
