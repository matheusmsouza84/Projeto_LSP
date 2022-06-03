<!DOCTYPE html>
<?php
    session_start();
    
    if( isset($_REQUEST['errouser']) ){
        echo "<script> alert('Usuário e/ou Senha não cadastrado'); </script>";
        }

?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Página Inicial</title>
</head>
    <body>
        <div class="header">CMR Store</div>
            <nav class="navbar navbar-expand-md">
                <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="admin.php">
                            <button type="button" id="loginadm" title="Logar como Administrador">
                                <svg class="bi bi-people-fill" width="20px" height="20px" viewBox="0 0 16 16" fill="white" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
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
                                <button type="button" id="logout" title="Logout" href="controller/logout.php">
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
                    <h4><b>Login</b></h4><br>
                    <form method="POST" id="formlogin" action="controller/login.php" >
                        <input type="email" placeholder="E-mail" name="email" required> <br><br>
                        <input type="password" placeholder="Senha" name="senha" required> <br><br>
                        <input class="btn btn-success" type="submit" value="Login"> <br><br>
                        <a href="cadastrar.php"> Ainda não é inscrito? <strong> Cadastre-se! </strong>
                    </form>
                 </div>
            </div>
        <div class="footer"></div>
    </body>
</html>