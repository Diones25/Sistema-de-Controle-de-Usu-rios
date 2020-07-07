<?php
    require 'config.php'
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Usuários</title>
</head>
<body>
    <div class="container-button">
        <a class="adicionar" href="adicionar.php">Adicionar novo usuário</a>
    </div>
    <table border="1" width="60%">
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Ações</th>
        </tr>
        <?php
            $sql = "SELECT * FROM usuarios";
            $sql = $pdo->query($sql);
            if($sql->rowCount() > 0){
                foreach($sql->fetchAll() as $usuario){
                    echo '<tr>';
                    echo '<td>'.$usuario["nome"].'</td>';
                    echo '<td>'.$usuario["email"].'</td>';
                    echo '
                    <td>
                        <a class="editar" href=editar.php?id='.$usuario['id'].'>Editar</a>  
                        <a class="exluir" href=excluir.php?id='.$usuario['id'].'>Ecluir</a>
                    </td>';
                    echo '</tr>';
                }
            }
        ?>
    </table>
    
    <!--Estilo css-->
    <style>
        table{
            border-collapse: collapse;
            margin: 0 auto;
        }
        th{
            padding: 6px;
            background: #ccc;
        }
        .editar{
            text-decoration: none;
            width: 64px;
            height: 27px;
            display: inline-block;
            background: #f1c40f;
            text-align: center;
            line-height: 27px;
            color: #fff;
            margin: 2px 2px 2px 2px;
            border-radius: 3px;
            box-shadow: 2px 2px 2px #ccc;
        }
        .editar:hover{
            background: #fdcb6e;
        }
        .exluir{
            text-decoration: none;
            width: 64px;
            height: 27px;
            display: inline-block;
            background: #e74c3c;
            text-align: center;
            line-height: 27px;
            color: #fff;
            margin: 2px 2px 2px 0px;
            border-radius: 3px;
            box-shadow: 2px 2px 2px #ccc;
        }
        .exluir:hover{
            background: #ff7675;
        }
        .container-button{
            width: 60%;
            margin: 0 auto;
        }
        .adicionar{
            text-decoration: none;
            width: 210px;
            height: 35px;
            display: inline-block;
            background: #2ecc71;
            text-align: center;
            line-height: 35px;
            color: #fff;
            margin: 0 0 5px 0;
            border-radius: 3px;
            box-shadow: 2px 2px 2px #ccc;
        }
        .adicionar:hover{
            background: #55efc4;
        }
    </style>
</body>
</html>