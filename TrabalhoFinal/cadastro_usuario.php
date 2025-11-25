<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_crud.css">
    <title>Cadastro Usuario</title>
</head>
<body>
    <h1>Cadastro de Usuário</h1>
    <div class="container">
    <form action="processa_cadastro.php" method="POST">
        <label for="name">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <label for="login">Login:</label>
        <input type="text" id="login" name="login" required>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        <input type="submit" value=Cadastrar>
    </form>
    </div>
</body>
</html>