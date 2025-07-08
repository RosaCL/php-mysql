<?php
$message = '';
$moved = false;
if ($_SERVER['REQUEST_METHOD']=='POST'){
    if($_FILES['image']['error']===0){
        $temp = $_FILES['image']['tmp_name'];
        $path = 'uploads/' . $_FILES['image']['name'];

        $moved = move_uploaded_file($temp, $path);
    }
    if($moved === true){
        $message = '<img class="img" src="'. $path .'" alt="">' ;
    }else{
        $message = 'Este arquivo não pode ser salvo!';
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