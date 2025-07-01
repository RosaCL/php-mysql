<?php

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
                <form action="">
                    <p>Nome: <input type="text" name="name" id=""></p>
                    <p>Idade: <input type="text" name="age" id=""></p>
                    <p>Email: <input type="text" name="email" id=""></p>                   
                    <p>Senha: <input type="password" name="pass" id=""></p>
                    <p>Bio: <textarea name="bio" id=""></textarea></p>
                    <p>Preferência de contato:
                        <select name="preference">
                            <option value="email">Email</option>
                            <option value="phone">Telefone</option>
                        </select>
                    </p>
                    <p>Avaliação:</p>
                    <div class="avalia">
                            <p>1 <input type="radio" name="av" value="1">&nbsp;</p>
                            <p>2 <input type="radio" name="av" value="2">&nbsp;</p> 
                            <p>3 <input type="radio" name="av" value="3"> &nbsp;</p>                   
                    </div>
                    <p><input type="checkbox" name="terms" value="true"> Eu concordo com os termos e condições</p>
                    <input class="btn" type="submit" value="Enviar">
                </form>
            </div>
        </div>

    </section>

    <?php include './includes/footer.php'?>
</body>
</html>
