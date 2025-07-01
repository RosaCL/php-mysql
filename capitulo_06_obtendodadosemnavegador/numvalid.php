<?php
declare(strict_types=1);
$age = '';
$message = '';
function is_number($number, int $min=0, int $max=100):bool{
    return ($number>=$min and $number <=$max);
}
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $age = $_POST['age'];
    $valid = is_number($age, 16, 65);
    if ($valid){
        $message = 'Idade válida';
    }else{
        $message = 'Você tem que ter entre 16-65';
    }
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
            <?=$message?>
            <form action="" method="post">
                Idade: <input type="text" name="age" size="4" value="<?=htmlspecialchars($age)?>">
                <input type="submit" value="Salvar">
            </form>
        </div>

    </section>
    <?php include './includes/footer.php'?>
</body>
</html>
