<?php

require_once('../banco/conexao.php');

$atualizar = false;
$id = 0;
$usuario = '';
$senha = '';

if (isset($_POST['salvar'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $conexao->query("INSERT INTO usuario(usuario, senha) VALUES ('$usuario', '$senha')") or die($conexao->error); #tabela usuario senha

    header("Location: usuario.php");

}

if (isset($_GET['excluir'])) {
   $id = $_GET['excluir'];

    $conexao->query("DELETE FROM usuario WHERE id = $id") or die($conexao->error); #tabela usuario senha

    header("Location: usuario.php");

}

?>