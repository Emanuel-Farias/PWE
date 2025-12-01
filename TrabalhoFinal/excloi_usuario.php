<?php
if(!isset($_POST["id"])){
    header("Location: loga_usuario.php?error=faltando_dados");
    exit();
}

require_once "conexao.php";

$sucesso = delete_usuario($_POST["id"]);

if ($sucesso) {
    echo "Usuário deletado com sucesso!";
    } else {
        echo "Ops! Algo deu errado.";
}
?>