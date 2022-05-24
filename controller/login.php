<?php
    include_once "../model/clsConexao.php";

    $email = $_POST['email'];
    $senha = MD5($_POST['senha']);

    $query = "SELECT email, senha FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $result = Conexao::consultar($query);
    session_start();
        if( mysqli_num_rows($result) > 0 ){
            $usuario = mysqli_fetch_assoc($result);
            $_SESSION["logado"] = TRUE;
            $_SESSION["email_usuario"] = $usuario['email'];
            $_SESSION["senha_usuario"] = $usuario['nome'];

            header("Location: ../loja.php");
        }else{
            header(" Location: ../index.php?erro");
        }
?>