
<?php
class Customer{
    public string $name;
    public string $username;
    public string $email;    
    public string $password;
}

class Account{
    public int $number;
    public string $type;
    public float $balance;
}

$customer = new Customer();
$account = new Account();
$customer->name='Ivy Stone';
$customer->username ='IvyS';
$customer->email = 'ivy2g.link';
$account->balance =1000.00;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popozuda Investimentos</title>
    <link rel="stylesheet" href="./ressources/css/style.css">
</head>
<body>
    <?php
    include './includes/header.php'
    ?>
    <section>
        <p><strong>Nome:</strong> <?=$customer->name?></p>
        <p><strong>Username:</strong> <?=$customer->username?></p>
        <p><strong>Email:</strong> <?=$customer->email?></p>
        <p><strong>Saldo: </strong><?=$account->balance?></p>
    </section>
    <?php
    include './includes/footer.php'
    ?>


    
</body>
</html>