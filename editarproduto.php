<?php
    session_start();
    include_once "DAO/clsProdutosDAO.php";
    include_once "model/clsConexao.php";
    include_once "model/clsProduto.php";
    //$id = filter_input(INPUT_GET, _N'id', FILTER_SANITIZEUMBER_INT);
    $result_prod = "SELECT * FROM produtos WHERE id = '1'";
    //$resultadop = mysqli_query($conn, $result_prod);
    $resultadop = Conexao::consultar($result_prod);
    $produtor = mysqli_fetch_assoc($resultadop);   
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="somar.js"></script>
    <title> Cadastro </title>
</head>
    <body>
    <div class="header">CMR Store</div>
            <nav class="navbar navbar-expand-md">
                <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="index.php">
                                <button type="button" id="paginicial" title="Voltar a página Inicial">
                                    <svg class="bi bi-house-fill" width="20px" height="20px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                                    </svg>
                                </button>
                            </a>
                            <a href="loja.php">
                                <button type="button" id="paginicial" title="Ir para a loja">
                                    <svg class="bi bi-basket3-fill" width="20px" height="20px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10.243 1.071a.5.5 0 0 1 .686.172l3 5a.5.5 0 0 1-.858.514l-3-5a.5.5 0 0 1 .172-.686zm-4.486 0a.5.5 0 0 0-.686.172l-3 5a.5.5 0 1 0 .858.514l3-5a.5.5 0 0 0-.172-.686z"/>
                                        <path d="M13.489 14.605A.5.5 0 0 1 13 15H3a.5.5 0 0 1-.489-.395L1.311 9H14.69l-1.201 5.605z"/>
                                            <rect width="16" height="2" y="6" rx=".5"/>
                                    </svg>
                                </button>
                            </a>
                            <a href="estoque.php">
                                <button type="button" id="estoque" title="Ir para o Estoque">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box2-fill" viewBox="0 0 16 16">
                                <path d="M3.75 0a1 1 0 0 0-.8.4L.1 4.2a.5.5 0 0 0-.1.3V15a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4.5a.5.5 0 0 0-.1-.3L13.05.4a1 1 0 0 0-.8-.4h-8.5ZM15 4.667V5H1v-.333L1.5 4h6V1h1v3h6l.5.667Z"/>
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
                                    <svg class="bi bi-person-dash-fill" width="20px" height="20px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm5-.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z"/>
                                    </svg>
                                </button>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="content"><br><br><br><br><br><br><br>
            <div class="shadow-lg bg-cray" id="divsombra">
                        <h4><b>Editar Produto</b></h4><br>
                        <form method="POST" action="controller/editarprod.php">
                        <input type="hidden" name="id" value="<?php echo $prod['id']; ?>">
                            <label><b>Nome:</b></label>
                                <input type="text" name="nome" placeholder="Nome do Produto" value="<?php echo $prode['nome']; ?>" required><br><br>
                            <label><b>Gênero:</b></label>
                                <select name="genero" id="sgenero" value="<?php echo $produto['genero']; ?>" required>
                                    <option value=""> Selecione </option>
                                    <option value="Arcade"> Arcade </option>
                                    <option value="MMO"> Aventura </option>
                                    <option value="RPG"> RPG </option>
                                    <option value="MMO"> MMO </option>
                                    <option value="Terror"> Terror </option>
                                </select><br><br>
                            <label><b>Preço:</b></label>
                                <input type="number" name="preco" placeholder="Preço" value="<?php echo $prode['preco']; ?>" required min="0.01" max="10000.00" step="0.01"><br><br>
                            <label><b>Quantidade:</b></label>
                                <input type="number" name="quantidade" value="<?php echo $prode['quantidade']; ?>" placeholder="Quantidade" required min="1"><br><br>
                            <input type="submit" value="Editar_Produto"><br>
                            
                        </form>
                    </div>
            </div>
        <div class="footer"></div>
        <br /><b>Warning</b>:  Undefined variable $produto in <b>C:\xampp\htdocs\Projeto_LSP\editarproduto.php</b> on line <b>74</b><br /><br /><b>Warning</b>:  Trying to access array offset on value of type null in <b>C:\xampp\htdocs\Projeto_LSP\editarproduto.php</b> on line <b>74</b><br />