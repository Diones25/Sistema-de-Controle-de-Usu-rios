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
    <table border="1" width="100%">
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
                    echo "<tr>";
                    echo "<td>".$usuario["nome"]."</td>";
                    echo "<td>".$usuario["email"]."</td>";
                    echo "<td></td>";
                    echo "</tr>";
                }
            }
        ?>
    </table>
    
    <!--Estilo css-->
    <style>
        table,tr,td{
            border-collapse: collapse;
        }
    </style>
</body>
</html>