<?php

$moved = false;
$message = '';
$error = '';
$upload_path = 'uploads/';
$max_size = 5242880; // 5MB
$allowed_types = ['image/png', 'image/jpeg', 'image/gif',];
$allowed_exts = ['png', 'jpeg', 'gif',];

function create_filename($filename, $upload_path)
{
    $basename = pathinfo($filename, PATHINFO_FILENAME);
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    $basename = preg_replace('/[^A-z0-9]/', '_', $basename);
    $i = 0;

    while (file_exists($upload_path . $filename)) {
        $i = $i + 1;
        $filename = $basename . $i . '.' . $extension;
    }
    return $filename;
}


function create_thumbnail($temporary, $destination)
{
    $image = new Imagick($temporary);
    $image->thumbnailImage(200, 200, true);
    $image->writeImage($destination);
    return true;
}

function created_cropped_thumbnail($temporary, $destination)
{
    $image = new Imagick($temporary);

    $image->cropThumbnailImage(200, 200, true);
    $image->writeImage($destination);
    return true;
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verifica erros no upload
    if ($_FILES['image']['error'] !== 0) {
        $error = 'Erro no upload do arquivo.';
    } else {
        // Verifica tamanho do arquivo
        if ($_FILES['image']['size'] > $max_size) {
            $error = 'Arquivo muito grande';
        }

        // Verifica tipo MIME
        $type = mime_content_type($_FILES['image']['tmp_name']);
        if (!in_array($type, $allowed_types)) {
            $error = 'Tipo de arquivo não permitido.';
        }

        // Verifica extensão do arquivo
        $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
        if (!in_array($ext, $allowed_exts)) {
            $error = 'Extensão de arquivo não permitida.';
        }

        // Se não houver erros, move o arquivo
        if (empty($error)) {
            $filename = create_filename($_FILES['image']['name'], $upload_path);
            $destination = $upload_path . $filename;
            $moved = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
            $thumbpath = $upload_path . 'thumb_' . $filename;
            $thumb = create_thumbnail($destination, $thumbpath);
        }
    }


    if ($moved === true) {
        $message = 'Upload realizado com sucesso: <br><img  src="' . $destination . '">';
    } else {
        $message = '<b>Não foi possível realizar o upload:</b> ' . $error;
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
            <?= $message ?>
            <form action="" method="post" enctype="multipart/form-data">
                <label for="image"><b>Envie sua imagem:</b></label>
                <input type="file" name="image" accept="image/png, image/jpeg, image/gif">
                <input type="submit" value="Enviar" class="btn">

            </form>
        </div>
    </section>
    <?php include './includes/footer.php' ?>
</body>

</html>