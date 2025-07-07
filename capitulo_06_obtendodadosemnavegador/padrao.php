<?php
$user = ['name' => '',
'age' => '',
'terms' => '',
];
$error = ['name' => '',
'age' => '',
'terms' => false,
];
$message = '';

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $validation_filter ['name']['filter'] = FILTER_VALIDATE_REGEXP;
    $validation_filter ['name']['options'] ['regexp'] = '/^[A-z]{2,10}$/';

    $validation_filter['age']['filter'] = FILTER_VALIDATE_INT;
    $validation_filter['age']['options']['min_range'] = 16;
    $validation_filter['age']['options']['max_range'] = 65;

    $validation_filter['terms'] = FILTER_VALIDATE_BOOLEAN;

    $user = filter_input_array(INPUT_POST,$validation_filter);

    $error ['name'] = $user ['name'] ? '': 'Nome deve ter entre 2 e 10 letras usando letras de A-z';
    $error ['age'] = $user ['age'] ? '': 'Idade deve ser entre 16-65 anos';
    $error ['terms'] = $user ['terms'] ? '': 'Você deve concordar com os termos e condições';
    $invalid = implode($error);

    if ($invalid){
        $message = 'Por favor corriga os seguintes erros:';
    }else{
        $message = 'Obrigado, seus dados são válidos';
    }

    $user['name'] = filter_var($user['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $user['age'] = filter_var($user['age'], FILTER_SANITIZE_NUMBER_INT);

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
                Nome: <input type="text" name="name" value="<?=$user['name'];?>">
                <span><?=$error['name'];?></span>
                Idade: <input type="text" name="age" value="<?=$user['age']?>">
                <span><?=$error['age'];?></span>
                <p><input type="checkbox" name="terms" value="true" <?=$user['terms'] ? 'checked' : '' ?>>Eu concordo com os termos e condições.</p>
                <span><?=$error['terms'];?></span>
                <input type="submit" class="btn" value="Enviar">
            </form>
        </div>

    </section>
    <?php include './includes/footer.php'?>
</body>
</html>
