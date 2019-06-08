<?php

require_once('../banco/conexao.php');

$atualizar = false;
$id = 0;
$usuario = '';
$senha = '';

if (isset($_POST['salvar'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $conexao->query("INSERT INTO usuario(usuario, senha) VALUES ('$usuario', '$senha')") or die($conexao->error);

    header("Location: usuario.php");
}

if (isset($_GET['excluir'])) {
    $id = $_GET['excluir'];

    $conexao->query("DELETE FROM usuario WHERE id = $id") or die($conexao->error);

    header("Location: usuario.php");
}

if (isset($_GET['editar'])) {
    $id = $_GET['editar'];
    $resultado = $conexao->query("SELECT * FROM usuario WHERE id= $id") or die($conexao->error);

    if (count($resultado) == 1) {
        $row =  $resultado->fetch_array();
        $usuario = $row['usuario'];
        $senha = $row['senha'];
        $id = $row['id'];
    }
}

if (isset($_POST['atualizar'])) {
    $id = $_POST['id'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $conexao->query("UPDATE usuario SET usuario = '$usuario', senha = '$senha' WHERE id = $id") or die($conexao->error);

    header("Location: usuario.php");
}
