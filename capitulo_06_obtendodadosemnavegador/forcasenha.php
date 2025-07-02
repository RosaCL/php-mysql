<?php
declare(strict_types=1);

$password = '';
$message = '';

function is_password(string $password): bool {
    return (mb_strlen($password) >= 8 
        && preg_match('/[A-Z]/', $password)
        && preg_match('/[a-z]/', $password)
        && preg_match('/[0-9]/', $password));
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $password = $_POST['password'] ?? '';
    $valid = is_password($password);
    $message = $valid ? 'Senha forte' : 'Senha fraca';
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
            <?= $message ?>
            <form action="" method="post">
                Senha: <input type="password" name="password" id="">
                <input type="submit" value="Salvar" class="btn">
            </form>
        </div>
    </section>
    <?php include './includes/footer.php'?>
</body>
</html>