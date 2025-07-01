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
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $term = $_POST['term'];
                echo 'Você está procurando ' . htmlspecialchars($term);
            } else { ?>

                <form action="" method="post">
                    Busca por (com post): <input type="text" name="term">
                    <input type="submit" value="Buscar">
                </form>
            <?php } ?>
            <?php
            $submitted = $_GET['sent'] ?? '';
            if ($submitted == 'search') {
                $term = $_GET['term'] ?? '';
                echo 'Você está procurando ' . htmlspecialchars($term);
            } else { ?>

                <form action="" method="get">
                    Busca por (com get): <input type="text" name="term">
                    <input type="submit" name="sent" value="Buscar">
                </form>
            <?php } ?>
        </div>

    </section>
    <?php include './includes/footer.php' ?>
</body>

</html>