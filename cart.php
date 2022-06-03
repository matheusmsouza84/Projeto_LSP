<<<<<<< HEAD
<?php
    session_start();
    include_once "DAO/clsProdutosDAO.php";
    include_once "model/clsConexao.php";
    include_once "model/clsProduto.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Carrinho</title>
</head>
    <body>
        <div class="header">CMR Store</div>
            <nav class="navbar navbar-expand-md">
                <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <?php
                                if(!isset($_SESSION['admlogado']) && !isset($_SESSION['logado'])){
                                    echo '<a href="index.php">'
                                        .'<button type="button" id="paginicial" title="Voltar a página Inicial">'
                                            .'<svg class="bi bi-house-fill" width="20px" height="20px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">'
                                                .'<path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>'
                                                .'<path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>'
                                            .'</svg>'
                                        .'</button>'
                                    .'</a>';
                                }
                            ?>
                            <?php
                                echo '<a href="loja.php">'
                                        .'<button type="button" id="voltar" title="Voltar">'
                                        .'<svg class="bi bi-arrow-left" width="20px" height="20px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg%22%3E">'
                                        .'<path fill-rule="evenodd" d="M5.854 4.646a.5.5 0 0 1 0 .708L3.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"/>'
                                        .'<path fill-rule="evenodd" d="M2.5 8a.5.5 0 0 1 .5-.5h10.5a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>'
                                        .'</svg>'
                                    .'</button>'
                                .'</a>';
                            ?>
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
            <div class="content"><br><br><br><br><br><br><br><br><br><br><br><br>
                        <?php
                            if( !isset($_SESSION['cart']) || count( $_SESSION['cart'] ) == 0  ){
                                
                                echo '<div class="shadow-lg bg-cray" id="divsombra">
                                <h4>Seu carrinho está vazio!</h4>
                                </div>';
                                
                            }else{
                                echo '<div id="table">';
                                echo '<table>';
                                echo '  <tr>';
                                echo '      <th>Código</th>';
                                echo '      <th>Nome</th>';
                                echo '      <th>Genero</th>';
                                echo '      <th>Quantidade</th>';
                                echo '      <th>Preço</th>';
                                echo '      <th>DOGE</th>';
                                echo '      <th>Subtotal</th>';
                                echo '      <th>Subtotal</th>';
                                echo '  </tr>';
                                $total = 0;
                                $totalc = 0;

                                foreach( $_SESSION['cart'] as $idprod => $quantidade ){
                                    
                                    $produto = ProdutoDAO::getProdutosById($idprod);
                                    echo ' <tr>';
                                    echo '      <td>'.$produto->id.'</td>';
                                    echo '      <td>'.$produto->nome.'</td>';
                                    echo '      <td>'.$produto->genero.'</td>';
                                    echo '      <td>'.$quantidade.'</td>';
                                    echo '      <td>R$ '.$produto->preco.'</td>';
                                    echo '      <td>'.$produto->cripto.'</td>';
                                    
                                    $subtotal = $quantidade * $produto->preco;
                                    $total += $subtotal;
                                        
                                    echo ' <td>R$ '.$subtotal.'</td>';

                                    $subtotalc = $quantidade * $produto->cripto;
                                    $totalc += $subtotalc;
                                    
                                    echo ' <td>'.$subtotalc.'</td>';
                                    echo ' </tr>';

                                }
                                echo '  <tr>';
                                echo '      <th colspan="4">Total:</th>';
                                echo '      <th colspan="3">R$ '.$total.'</th>';
                                echo '      <th colspan="3">DOGE '.$totalc.'</th>';

                                echo '  </tr>';
                                echo '</table>';
                                echo '</div>';
                                echo '<button type="button" class="btn btn-warning">CriptoMoeda</button>';
                                echo '<br>';
                                echo '<button type="button" class="btn btn-success">Dinheiro</button>';
                            }
                            ?>                           
                        <br><br><br><br>
            </div>
        <div class="footer"><br><br><br></div>
    </body>
=======
<?php
    session_start();
    include_once "DAO/clsProdutosDAO.php";
    include_once "model/clsConexao.php";
    include_once "model/clsProduto.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Carrinho</title>
</head>
    <body>
        <div class="header">CMR Store</div>
            <nav class="navbar navbar-expand-md">
                <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <?php
                                if(!isset($_SESSION['admlogado']) && !isset($_SESSION['logado'])){
                                    echo '<a href="index.php">'
                                        .'<button type="button" id="paginicial" title="Voltar a página Inicial">'
                                            .'<svg class="bi bi-house-fill" width="20px" height="20px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">'
                                                .'<path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>'
                                                .'<path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>'
                                            .'</svg>'
                                        .'</button>'
                                    .'</a>';
                                }
                            ?>
                            <?php
                                echo '<a href="loja.php">'
                                        .'<button type="button" id="voltar" title="Voltar">'
                                        .'<svg class="bi bi-arrow-left" width="20px" height="20px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg%22%3E">'
                                        .'<path fill-rule="evenodd" d="M5.854 4.646a.5.5 0 0 1 0 .708L3.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"/>'
                                        .'<path fill-rule="evenodd" d="M2.5 8a.5.5 0 0 1 .5-.5h10.5a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>'
                                        .'</svg>'
                                    .'</button>'
                                .'</a>';
                            ?>
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
            <div class="content"><br><br><br><br><br><br><br><br><br><br><br><br>
                        <?php
                            if( !isset($_SESSION['cart']) || count( $_SESSION['cart'] ) == 0  ){
                                
                                echo '<div class="shadow-lg bg-cray" id="divsombra">
                                <h4>Seu carrinho está vazio!</h4>
                                </div>';
                                
                            }else{
                                echo '<div id="table">';
                                echo '<table>';
                                echo '  <tr>';
                                echo '      <th>Código</th>';
                                echo '      <th>Nome</th>';
                                echo '      <th>Genero</th>';
                                echo '      <th>Quantidade</th>';
                                echo '      <th>Preço</th>';
                                echo '      <th>Cripto</th>';
                                echo '      <th>Subtotal</th>';
                                echo '  </tr>';
                                $total = 0;
                                $totalc = 0;

                                foreach( $_SESSION['cart'] as $idprod => $quantidade ){
                                    
                                    $produto1 = ProdutoDAO::getProdutosById($idprod);
                                    echo ' <tr>';
                                    echo '      <td>'.$produto1->id.'</td>';
                                    echo '      <td>'.$produto1->nome.'</td>';
                                    echo '      <td>'.$produto1->genero.'</td>';
                                    echo '      <td>'.$quantidade.'</td>';
                                    echo '      <td>R$ '.$produto1->preco.'</td>';
                                    echo '      <td>LSP'.$produto1->cripto.'</td>';
                                    $subtotal = $quantidade * $produto1->preco;
                                    $total += $subtotal;
                                        
                                    echo ' <td>R$ '.$subtotal.'</td>';

                                    $subtotalc = $quantidade * $produto1->cripto;
                                    $totalc += $subtotalc;
                                    
                                    echo ' <td>R$ '.$subtotalc.'</td>';
                                    echo ' </tr>';



                                }
                                echo '  <tr>';
                                echo '      <th colspan="4">Total:</th>';
                                echo '      <th colspan="3">R$ '.$total.'</th>';
                                echo '  </tr>';
                                echo '</table>';
                                echo '</div>';
                            }
                        ?>
                        <br><br><br><br>
            </div>
        <div class="footer"><br><br><br></div>
    </body>
>>>>>>> 6197034bda7b78fe9f3002645f0cac1a0ecab411
</html>