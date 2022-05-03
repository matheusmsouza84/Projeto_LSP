<?php
    include_once "../model/clsConexao.php";

    $nome = $_POST['nome'];
    $genero = $_POST['genero'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];

    $query = "INSERT INTO produtos (nome, genero, preco, quantidade) VALUES ('$nome', '$genero', '$preco', '$quantidade')";

    $result = Conexao::executar($query);
    header("Location: ../cadastro_produto.php");
?>