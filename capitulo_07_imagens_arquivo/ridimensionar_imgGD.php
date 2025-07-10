<?php
function resize_image_gd($orig_path, $new_path, $max_width, $max_height){
    $image_data = getimagesize($orig_path);
    $orig_width = $image_data[0];
    $orig_height = $image_data[1];
    $media_type = $image_data['mime'];
    $new_width = $max_width;
    $new_height = $max_height;
    $orig_ratio = $orig_width/$orig_height;

    if($orig_width>$orig_height){
        $new_height = intval($new_width/$orig_ratio);
    }else{
        $new_width = intval($new_height * $orig_ratio);
    }

    switch($media_type){
        case 'image/gif':
            $orig = imagecreatefromgif($orig_path);
            break;
        case 'image/jpeg':
            $orig = imagecreatefromjpeg($orig_path);
            break;
        case 'image/png':
            $orig = imagecreatefrompng($orig_path);
            break;
    }

    $new = imagecreatetruecolor($new_width, $new_height);

    imagecopyresampled($new, $orig, 0, 0, 0, 0, $new_width, $new_height, $orig_width, $orig_height);

    switch($media_type){
        case 'image/gif':
            $result = imagegif($new, $new_path);
            break;
        case 'image/jpeg':
            $result = imagejpeg($new, $new_path);
            break;
        case 'image/png':
            $result = imagepng($new, $new_path);
            break;
    }
    return $result;

}
$moved = false; 
$message = '';
$error = '';
$upload_path = 'uploads/';
$max_size = 5242880; // 5MB
$allowed_types = [ 'image/png', 'image/jpeg', 'image/gif',];
$allowed_exts = [ 'png', 'jpeg', 'gif',];

function create_filename($filename, $upload_path) {
    $basename = pathinfo($filename, PATHINFO_FILENAME);
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    $basename = preg_replace('/[^A-z0-9]/', '_', $basename);
    $i = 0;

    while(file_exists($upload_path . $filename)) {
        $i = $i + 1;
        $filename = $basename . $i . '.' . $extension;
    }
    return $filename;
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verifica erros no upload
    if($_FILES['image']['error'] !== 0) {
        $error = 'Erro no upload do arquivo.';
    } else {
        // Verifica tamanho do arquivo
        if($_FILES['image']['size'] > $max_size) {
            $error = 'Arquivo muito grande';
        }

        // Verifica tipo MIME
        $type = mime_content_type($_FILES['image']['tmp_name']);
        if(!in_array($type, $allowed_types)) {
            $error = 'Tipo de arquivo não permitido.';
        }

        // Verifica extensão do arquivo
        $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
        if(!in_array($ext, $allowed_exts)) {
            $error = 'Extensão de arquivo não permitida.';
        }

        // Se não houver erros, move o arquivo
        if(empty($error)) {
            $filename = create_filename($_FILES['image']['name'], $upload_path);
            $destination = $upload_path . $filename;
            $moved = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
            $thumbpath = $upload_path. 'thumb_' . $filename;
            $resized = resize_image_gd($destination, $thumbpath, 200, 200);
        }
    }

    if ($moved === true) {
        $message = 'Upload realizado com sucesso: <br><img class="img"  src="'. $destination .'">';
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