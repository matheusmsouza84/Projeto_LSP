
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title> Cadastro </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
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
                     </li>
                </ul>
            </div>
        </nav>
        <div class="content"><br><br><br><br><br><br><br>
                <div class="" id="divcadastro">
                    <h1>Cadastrar Usuário</h1><br>
                    <form method="POST" action="controller/salvarusuario.php">
                        <label>Nome: </label>
                            <input type="text" name="nome" placeholder="Digite seu nome completo" required> <br> <br>
                        <label>E-mail: </label>
                            <input type="email" name="email" placeholder="Digite seu e-mail" required> <br> <br>
                        <label>Senha: </label>
                            <input type="password" name="senha" placeholder="Digite uma senha" required> <br> <br>
                        <input type="submit" value="Cadastrar"> <br>
                    </form>
                </div>
        </div>
    <div class="footer"></div>
    </body>
</html>