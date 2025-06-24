<?php
declare (strict_types=1);

class Account{
    public int $number;
    public string $type;
    public float $saldo;
    public float $juros;

    public function __construct(int $number, string $type, float $saldo=0.00, float $juros=0.0)
    {
        $this->number = $number;
        $this->type = $type;
        $this->saldo = $saldo;
        $this->juros = $juros;

    }

    public function deposit(float $amount): float{
        $this->saldo+=$amount;
        return $this->saldo;
    }

    public function withdraw(float $amount): float{
        $this->saldo-=$amount;
        return $this->saldo;
    }

    public function jurosmes(float $amount): float{
        $this -> saldo *($this->juros/100);
        $this -> saldo += $juros;
        return $this->saldo;
    }

}
$checking = new Account(43161176, 'Conta-Corrente', 32.00);
$saving = new Account(20148896, 'Conta-Poupança', 756.00);
$investimento = new Account(98765432, 'Conta-Investimento', 1000.00, 5.0);

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
        
            <table>
                <tr>
                    <th>Data</th>
                    <th><?= $checking->type?></th>
                    <th><?=$saving->type?></th>
                    <th><?=$investimento->type?></th>
                    
                </tr>
                <tr>
                    <td>23/06</td>
                    <td>R$ <?=$checking->saldo?></td>
                    <td>R$ <?=$saving->saldo?></td>
                    <td>R$ <?=$investimento->saldo?></td>
                </tr>
                <tr>
                    <td>24/06</td>
                    <td>R$ <?=$checking->withdraw(5.00)?></td>
                    <td>R$ <?=$saving->withdraw(100.00)?></td>
                    <td>R$ <?=$investimento->withdraw(100.00)?></td>
                </tr>
                <tr>
                    <td>25/06</td>
                    <td>R$ <?=$checking->withdraw(5.00)?></td>
                    <td>R$ <?=$saving->deposit(300.00)?></td>
                    <td>R$ <?=$investimento->deposit(300.00)?></td>
                </tr>
            </table>
    </section>
    <?php
    include './includes/footer.php'
    ?>


    
</body>
</html>