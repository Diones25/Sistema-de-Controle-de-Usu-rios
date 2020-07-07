<?php
require 'config.php';
    if(isset($_POST['nome']) && empty($_POST['nome']) == false){
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $senha = md5(addslashes($_POST['senha']));

        $sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
        $sql = $pdo->query($sql);
        
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adiconar</title>
</head>
<body>
    <form method="post">
        Nome:
        <input type="text" name="nome" id=""><br>
        Email:
        <input type="email" name="email" id=""><br>
        Senha:
        <input type="password" name="senha" id=""><br>
        <input type="submit" value="Enviar">
    </form>

    <style>
        input{
            width: 300px;
            margin-bottom: 5px;
        }
        input[type=submit]{
            width: auto;
        }
    </style>
</body>
</html>