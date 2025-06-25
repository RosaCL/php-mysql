<?php
declare (strict_types=1);
class Account{

    public $number;
    public string $type;
    protected float $saldo;

    public function __construct(array $number, string $type, float $saldo=0.00)
    {
        $this->number=$number;
        $this->type=$type;
        $this->saldo=$saldo;
    }

    public function deposit(float $amount):float{
        $this->saldo+=$amount;
        return $this->saldo;
    }

    public function withdraw(float $amount):float{
        $this->saldo-=$amount;
        return $this->saldo;
    }

    public function getBalance(): float{
        return $this->saldo;
    }

}
$number = ['conta'=>1548967987, 'code'=>156498798,];
$account = new Account($number, 'Conta-Poupança', 10.00)
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
            <h2><?=$account->type?></h2>
            <p>Conta: <?=$account->number['conta']?></p>
            <p>Código:  <?=$account->number['code']?></p>
            
        </div>
    </section>
    <?php
    include './includes/footer.php'
    ?>


    
</body>
</html>