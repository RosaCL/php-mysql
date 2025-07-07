
<?php
$form =filter_input_array(INPUT_POST);
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
            <form action="filter_input_array.php" method="post">
                Email: <input type="text" name="email">
                <p>Eu concordo com os termos e codições: <input type="checkbox" name="terms" value="true"></p>
                <input class="btn" type="submit" value="Salvar">
            </form>
            <pre><?php var_dump($form);?></pre>
        </div>

    </section>
    <?php include './includes/footer.php'?>
</body>
</html>
