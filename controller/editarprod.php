<?php
include_once "../model/clsConexao.php";
include_once "../DAO/clsProdutosDAO.php";
include_once "../api.php";

    session_start();
    $idprod = $_SESSION['idprod'];
    $nome = $_POST['nome'];
    $genero = $_POST['genero'];
    $preco = $_POST['preco'];
    $cripto = $preco/$moeda;
    $quantidade = $_POST['quantidade'];

    $query = "UPDATE produtos SET nome = '$nome', genero = '$genero' , preco = '$preco', quantidade = '$quantidade', cripto = '$cripto' WHERE id = '$idprod'";
    
    $result = Conexao::executar($query);
    header("Location: ../estoque.php");
?>