<?php
if(!isset($_POST["login"]) || !isset($_POST["senha"])){
    header("Location: cadastro_usuario.php?error=faltando_dados");
    exit();
}

require_once "conexao.php";

$usuario = login_usuario($_POST["login"], $_POST["senha"]);

if ($usuario) {
    echo "Bem-vindo, " . $usuario["nome"];
    } else {
    echo "Login inválido";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_crud.css">
    <title>Menu Usuário</title>
</head>
<body>
    <h1>Menu de Usuario</h1>
        
        <form action="lista_usuarios.php">
        <input type="submit" value="Lista de Usuario">
        </form>

        <form action="excloi_usuario.php" method="POST">
        <label for="id">ID:</label>
        <input type="number" id="id" name="id" required>
        <input type="submit" value=Deletar>
        </form>

        <div class="container">
        <form action="edita_usuario.php" method="POST">
            <label for="name">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            <label for="login">Login:</label>
            <input type="text" id="login" name="login" required>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>
            <label for="id">ID:</label>
            <input type="number" id="id" name="id" required>
            <input type="submit" value=Editar>
        </form>
    </div>



</body>
</html>