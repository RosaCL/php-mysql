<?php
$message = '';
if ($_SERVER['REQUEST_METHOD']=='POST'){
    if($_FILES['image']['error']===0){
        $message = '<b>Arquivo: </b>'. $_FILES['image']['name'] .'<br>';
        $message .= '<b>Tamanho: </b>'. $_FILES['image']['size'].'bytes';
    }else{
        $message = 'Este arquivo não pode ser enviado!';
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
            <form action="" method="post" enctype="multipart/form-data">
                <label for="image"><b>Envie sua imagem:</b></label>
                <input type="file" name="image" accept="image/jpg, image/png, image/jpeg">
                <input type="submit" value="Enviar" class="btn">
            </form>
        </div>

    </section>
    <?php include './includes/footer.php'?>
</body>
</html>
