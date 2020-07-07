<?php
    require 'config.php';

    $id = 0;
    if(isset($_GET['id']) && empty($_GET['id']) == false){
        $id = addslashes($_GET['id']);
    }

    if(isset($_POST['nome']) && empty($_POST['nome']) == false){
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);

        $sql = "UPDATE usuarios SET nome = '$nome', email = '$email' WHERE id = '$id'";
        $sql = $pdo->query($sql);

        header("Location: index.php");
    }

    $sql = "SELECT *FROM usuarios WHERE id = '$id'";
    $sql = $pdo->query($sql);
    if($sql->rowCount() > 0){
        $dado = $sql->fetch();
    }
    else{
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <form method="post">
        Nome:
        <input type="text" name="nome" value="<?php echo $dado['nome'];?>"><br>
        Email:
        <input type="email" name="email" value="<?php echo $dado['email'];?>"><br>
        <input type="submit" value="Atualizar">
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