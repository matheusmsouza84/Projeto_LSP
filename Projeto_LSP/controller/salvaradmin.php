<?php
    include_once "../model/clsConexao.php";

    $user = $_POST['usuario'];
    $senha = $_POST['senha'];

    $query = "SELECT nome, senha FROM adm WHERE nome = '$user' AND senha = '$senha'";
    $result = Conexao::consultar($query);
        if( mysqli_num_rows($result) > 0 ){
            session_start();

            $usuario = mysqli_fetch_assoc($result);

            $_SESSION["admlogado"] = TRUE;
            $_SESSION["nome_adm"] = $usuario['nome'];
            $_SESSION["senha_adm"] = $usuario['senha'];

            header("Location: ../cadastro_produto.php");
        }else{
            header("Location: ../admin.php?erroadm");
        }
?>