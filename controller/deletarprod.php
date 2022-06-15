<?php
include_once "../model/clsConexao.php";
include_once "../DAO/clsProdutosDAO.php";
include_once "../estoque.php";

    $prodid = $_SESSION['prodid'];
    $query = "DELETE FROM produtos WHERE id = '$prodid'";
    $result = Conexao::executar($query);
    session_destroy();
    header("Location: ../estoque.php");
    
?>