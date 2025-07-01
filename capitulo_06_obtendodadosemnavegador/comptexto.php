<?php
    declare(strict_types=1);
    $username = '';
    $message = '';

    function is_text($text, int $min = 0, int $max =1000):bool{
        $length =mb_strlen($text);
        return($length>=$min and $length<=$max);
    }
    if ($_SERVER['REQUEST_METHOD']=='POST'){
        $username =$_POST['username'];
        $valid = is_text($username, 3,18);
        if($valid){
            $message = 'Username valido!';
        }else{
            $message = 'Username tem que ter entre 3 e 18 letras';
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
            <?=$message;?>
            <form action="" method="post">
                Username: <input type="text" name="username" value="<?=htmlspecialchars($username);?>">
                <input type="submit" value="Enviar">
            </form>
        </div>

    </section>
    <?php include './includes/footer.php'?>
</body>
</html>
