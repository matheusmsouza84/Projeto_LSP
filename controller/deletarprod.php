<?php
include_once "../model/clsConexao.php";
include_once "../DAO/clsProdutosDAO.php";
include_once "../estoque.php";

    session_start();
    $idprod = $_SESSION['idprod'];
    $query = "DELETE FROM produtos WHERE id = '$idprod'";
    $result = Conexao::executar($query);  
    header("Location: ../estoque.php");
?>