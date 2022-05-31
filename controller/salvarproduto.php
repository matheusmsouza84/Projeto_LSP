<?php
    include_once "../model/clsConexao.php";
    include_once "../api.php";

    $nome = $_POST['nome'];
    $genero = $_POST['genero'];
    $preco = $_POST['preco'];
    $cripto = $preco/$moeda;
    $quantidade = $_POST['quantidade'];

    $query = "INSERT INTO produtos (nome, genero, preco, quantidade, cripto) VALUES ('$nome', '$genero', '$preco', '$quantidade', '$cripto')";

    $result = Conexao::executar($query);
    header("Location: ../cadastro_produto.php");
?>