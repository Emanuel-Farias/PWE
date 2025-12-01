
<?php
    require_once "conexao.php";
    $usuarios = list_usuario();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuários</title>

</head>

<body >

<div >

    <h1 >Lista de Usuários</h1>

    <div >
        <div >

            <table >
                <thead >
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Login</th>
                        <th>Senha</th>
                    </tr>
                </thead>
    <hr>
                <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                        <td><?= htmlspecialchars($usuario["id"]); ?></td>
                        <td><?= htmlspecialchars($usuario["nome"]); ?></td>
                        <td><?= htmlspecialchars($usuario["login"]); ?></td>
                        <td><?= htmlspecialchars($usuario["senha"]); ?></td>
                    </tr>
                    
                <?php endforeach; ?>
                </tbody>
                    
            </table>

        </div>
    </div>

</div>

</body>
</html>
