<?php
    session_start();

    if(isset($_SESSION['admlogado']))
    unset ($_SESSION['admlogado']);

    if(isset($_SESSION['logado']))
    unset ($_SESSION['logado']);

    if( isset($_SESSION['nome_adm'] ))
    unset( $_SESSION['nome_adm'] );

    if( isset($_SESSION['senha_adm'] ))
    unset( $_SESSION['senha_adm'] );

    if( isset($_SESSION['email_usuario'] ))
    unset( $_SESSION['email_usuario'] );

    if( isset($_SESSION['senha_usuario'] ))
    unset( $_SESSION['senha_usuario'] );

    session_destroy();

    header("Location: ../index.php");
?>