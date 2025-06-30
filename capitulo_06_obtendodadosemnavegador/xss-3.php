<?php
    function html_escape(string $string):string{
    return htmlspecialchars($string,ENT_QUOTES |ENT_HTML5, 'UTF-8', true);
}
$message =$_GET['msg'] ?? 'Click no link no topo da pagina';
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
            <a href="xss-3.php?msg=<script src=js/bad.js></script>"></a>

            <h1>Exemplo de XXS</h1>
                <p><?= html_escape($message);?></p>
            
        </div>
        

    </section>
    <?php include './includes/footer.php'?>
</body>
</html>
