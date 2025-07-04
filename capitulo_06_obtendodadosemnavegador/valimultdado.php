<?php
declare (strict_types =1);
include 'includes/validate.php';
$user = [
    'name' => '',
    'age' =>'',
    'terms' =>'',
];
$error = [
    'name' => '',
    'age' =>'',
    'terms' =>'',
];

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $user ['name'] = $_POST['name'];
    $user ['age'] = $_POST['age'];
    $user ['terms'] = (isset($_POST['terms'])&& $_POST['terms']==true) ? true:false;

    $error ['name'] = is_text($user['name'], 2,20) ? '': 'Deve haver entre 2 e 20 caracteres';
    $error ['age'] = is_number($user['age'], 16,65) ? '': 'Você deve ter entre 16-65 anos';
    $error ['terms'] = $user['terms'] ? '': 'Você deve aceitar os termos e condições';

    $invalid = implode($error);
    if($invalid){
        $message = 'Por favor corriga os seguintes erros:';
    }else{
        $message = 'Os dados estão corretos';
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
            <div class="formcontainer">
                <form action="" method="post">
                    <label for="name">Nome</label>
                    <input type="text" name="name" value="<?=htmlspecialchars($user['name'])?>">
                    <span><?=$error['name']?></span>
                    <label for="age">Idade</label>
                    <input type="number" name="age" value="<?=htmlspecialchars($user['age'])?>">
                    <span><?=$error['age']?></span>
                    <p><input type="checkbox" name="terms" value="true"<?=$user['terms'] ? 'checked' : '' ?>>Eu concordo com ostermos e condições.</p>
                    <span><?=$error['terms']?></span>
                    <input type="submit" value="Salvar">

                </form>
            </div>
        </div>

    </section>
    <?php include './includes/footer.php'?>
</body>
</html>
