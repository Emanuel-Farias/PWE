<?php

function conectar()
{
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'banco';

    return new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
}
//conectar();

function cadastra_usuario($nome, $login, $senha)
{
    $con = conectar();
    $stmt = $con->prepare("INSERT INTO user (nome, login, senha) VALUES (:nome, :login, :senha)");
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':login', $login);
    $stmt->bindParam(':senha', $senha);
    return $stmt->execute();
}

function login_usuario($login, $senha)
{
    $con = conectar();
    $stmt = $con->prepare("SELECT * FROM user WHERE login = :login AND senha = :senha");
    $stmt->bindParam(':login', $login);
    $stmt->bindParam(':senha', $senha);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function delete_usuario($id)
{
    $con = conectar();
    $stmt = $con->prepare("DELETE FROM user WHERE id = :id");
    $stmt->bindParam(":id", $id);
    return $stmt->execute();
}

function atualiza_usuario($nome, $login, $senha, $id)
{
    $con = conectar();
    $stmt = $con->prepare("UPDATE user SET nome =:nome, login = :login, senha = :senha WHERE id = :id");
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':login', $login);
    $stmt->bindParam(':senha', $senha);
    $stmt->bindParam(':id', var: $id);
    return $stmt->execute();
}

function get_usuario($id)
{
    $con = conectar();
    $stmt = $con->prepare("SELECT * FROM user WHERE id = :id");
    $stmt->bindParam(':id', var: $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function list_usuario() {
    $con = conectar();
    $stmt = $con->prepare("SELECT * FROM user");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>