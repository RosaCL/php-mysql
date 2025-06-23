<?php
class Account{
    public int $number;
    public string $type;
    public float $balance;


    public function deposit(float $amount): float{
        $this->balance+=$amount;
        return $this->balance;
    }
    //retira 
    public function withdraw(float $amount): float{
        $this->balance-=$amount;
        return $this->balance;
    }
}
$account=new Account();
$account->balance=100.00;

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
        <div class="box">
            <p>R$ <?= $account->withdraw(75.00)?></p>
        </div>
    </section>
    <?php
    include './includes/footer.php'
    ?>


    
</body>
</html>