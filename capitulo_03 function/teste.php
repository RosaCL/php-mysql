<?php

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candy Shop</title>
    <link rel="stylesheet" href="./ressources/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <?php require 'includes/header.php'; ?>
    <section class="hero">
        <table>
            <tr>
                <th>Produto</th>
                <th>Estoque</th>
                <th>Reestocar</th>
                <th>Valor total</th>
                <th>Imposto</th>
            </tr>
            <tr>
                <td>Caramelo</td>
                <td>Bala de hortelã</td>
                <td>Doce de leite</td>
            </tr>
        </table>


    </section>
    <?php include 'includes/footer.php'; ?>
</body>

</html>