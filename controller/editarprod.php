<?php
include_once "../model/clsConexao.php";

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$genero = filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_STRING);
$preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_NUMBER_FLOAT);
$cripto = $cripto = $preco * 2;
$quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_STRING);

    $query = "UPDATE produtos SET nome = '$nome', genero = '$gereno' , preco = '$preco', quantidade = '$quantidade', cripto = '$cripto' WHERE id = '$id'";
    
    $result = Conexao::executar($query);
    header("Location: ../cadastro_produto.php");
?>