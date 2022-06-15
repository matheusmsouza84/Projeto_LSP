<?php
    session_start();

    if( isset($_REQUEST['erroadm']) ){
        echo "<script> alert('Usuário ou Senha não cadastrado'); </script>";
        }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Área para Funcionários</title>
</head>
<body>
<div class="header">CMR Store</div>
        <nav class="navbar navbar-expand-md">
            <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="index.php">
                            <button type="button" id="paginicial" title="Voltar a página Inicial">
                            <svg class="bi bi-house-fill" width="20px" height="20px" viewBox="0 0 16 16" fill="white" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg>
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    <a href="controller/logout.php">
                        <button type="button" id="logout" title="Logout">
                            <svg class="bi bi-person-dash-fill" width="20px" height="20px" viewBox="0 0 16 16" fill="white" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm5-.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                        </button>
                    </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="content"><br><br><br><br><br><br><br><br><br>
                <div class="shadow-lg bg-cray" id="divsombra">
                    <h4><b>Acessar como Administrador</b></h4><br>
                    <form method="POST" id="formlogin" action="controller/salvaradmin.php">
                        <input type="user" placeholder="Usuário" name="usuario" required> <br><br>
                        <input type="password" placeholder="Senha" name="senha" required> <br><br>
                        <input class="btn btn-success" type="submit" value="Log in"> <br><br>
                    </form>
                </div>
        </div>
    <div class="footer"></div>
    </body>
    </html>
