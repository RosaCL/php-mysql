<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Art Store</title>
    <link rel="stylesheet" href="./ressources/css/style.css">
</head>
<body>
    <?php 
    include './includes/setting.php';
    include './includes/header.php'; ?>
    <section>
        <h1>Bem-vindo ao <?=SITE_NAME?></h1><br>
        <p> Para nós contatar, nosso e-mail: <?=ADMIN_EMAIL?> </p>

    </section>
    <?php include './includes/footer.php';?>
</body>
</html>
