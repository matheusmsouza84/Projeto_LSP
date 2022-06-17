<?php
include_once "../model/clsConexao.php";
include_once "../DAO/clsProdutosDAO.php";
include_once "../estoque.php";

    $prodid = $_SESSION['prodid'];
    if($prodid > 0){
    $query = "DELETE FROM produtos WHERE id = '$prodid'";
    $result = Conexao::executar($query);
    session_destroy();
    echo "<script> window.location.href='../estoque.php?deletou'</script>";
    exit();
}
    else{
        echo'Deu ruim';

    }
?>