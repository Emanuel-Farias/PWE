<?php
if(!isset($_POST["nome"]) || !isset($_POST["login"]) || !isset($_POST["senha"]) || !isset($_POST["id"])){
    header("Location: loga_usuario.php?error=faltando_dados");
    exit();
}

require_once "conexao.php";

$atualizou = atualiza_usuario($_POST["nome"],$_POST["login"],$_POST["senha"],$_POST["id"]);

if ($atualizou) {
    echo "Usuário atualizado com sucesso!";
    } else {
        echo "Ops! Algo deu errado.";
}
?>