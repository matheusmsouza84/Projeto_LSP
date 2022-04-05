<?php
    include_once "../model/clsConexao.php";

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = MD5($_POST['senha']);

    $query = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    $result = Conexao::executar($query);
    header("Location: ../index.php");
?>