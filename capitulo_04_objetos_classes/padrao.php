<?php
include ('classes/account.php');
include ('classes/customer.php');

$accounts = 
[new Account(20489446,'C.C', -20),
new Account (20148896,'Poupança', 380),
new Account (156498468498, 'C.C', 22000.0)
];

$customer = new Customer('Ivy', 'Stone', 'ivy@g.com', 'azul2520', $accounts);

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
        <h2>Nome: <strong><?=$customer->NomeComleto()?></strong></h2>
        <table>
            <tr>
                <th>Número da conta</th>
                <th>Tipo</th>
                <th>Saldo</th>
            </tr>
            <?php foreach ($customer->accounts as $account){?>
                <tr>
                    <td><?=$account->number?></td>
                    <td><?=$account->type?></td>
                    <?php if($account->getBalance()>=0){?>
                        <td class="credit">
                            <?php }else{?>
                        <td class="overdraw">
                            <?php }?>
                        R$ <?= $account->getBalance()?>
                        </td>
                </tr>
            <?php }?>
        </table>
    </section>
    <?php
    include './includes/footer.php'
    ?>


    
</body>
</html>