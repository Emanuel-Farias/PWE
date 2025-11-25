
<?php
    require_once "conexao.php";
    $usuarios = get_usuarios();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuários</title>

    <!-- Bootstrap 5 -->
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
        rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <h1 class="text-center mb-4">Lista de Usuários</h1>

    <div class="card shadow">
        <div class="card-body">

            <table class="table table-striped table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Login</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                        <td><?= htmlspecialchars($usuario["id"]); ?></td>
                        <td><?= htmlspecialchars($usuario["nome"]); ?></td>
                        <td><?= htmlspecialchars($usuario["login"]); ?></td>
                        <td>
                            <a href="editar_usuario.php?id=<?= urlencode($usuario['id']); ?>" 
                               class="btn btn-sm btn-primary">
                                Editar
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>

            </table>

        </div>
    </div>

</div>

</body>
</html>
