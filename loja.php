<?php
    session_start();
    include_once "DAO/clsProdutosDAO.php";
    include_once "model/clsConexao.php";
    include_once "model/clsProduto.php";
    $cont=0;
    if( isset($_REQUEST['compra']) ){
        echo "<script> alert('Obrigado pela sua compra!!!');</script>";
        } 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>loja</title>
</head>
    <body>
        <div class="header">CMR Store</div>
            <nav class="navbar navbar-expand-md">
                <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                        </li>
                    </ul>
                </div>
                <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="cart.php">
                                <button type="button" id="cart">
                                    <svg class="bi bi-cart3" width="20px" height="20px" viewBox="0 0 16 16" fill="white" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                    </svg>
                                </button>
                            </a>
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
            <div class="content" id="divloja">
                <?php
                    $Lista = ProdutoDAO::getProdutos();
                        foreach($Lista as $prod){
                            $cont++;
                            echo '<div id="divprod">';
                            echo '<img src="imagens/'.$prod->imagem.'" widht="150px" height="150px"></img><br>';
                            echo '<label>Nome: '.$prod->nome.'</label><br>';
                            echo '<label>G??nero: '.$prod->genero.'</label><br>';
                            echo '<label>Pre??o: R$'.$prod->preco.'</label><br>';
                            echo '<label>DOGE:'.$prod->cripto.'</label><br>';
                            echo '<label>Quantidade: '.$prod->quantidade.'</label><br>';
                            echo '<a href="controller/salvarcart.php?adicionar&idprod='.$prod->id.'">';
                            echo '<button type="button" id="addcart" title="Adicionar ao carrinho">';
                            echo '<svg class="bi bi-plus-square" width="20px" height="20px" viewBox="0 0 16 16" fill="white" xmlns="http://www.w3.org/2000/svg">';
                            echo '<path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>';
                            echo '<path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>';
                            echo '<path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>';
                            echo '</svg>';
                            echo '</button>';
                            echo '</a>';
                            echo '<a href="controller/salvarcart.php?deletar&idprod='.$prod->id.'">';
                            echo '<button type="button" id="exccart" title="Excluir do carrinho">';
                            echo '<svg class="bi bi-trash" width="20px" height="20px" viewBox="0 0 16 16" fill="white" xmlns="http://www.w3.org/2000/svg">';
                            echo '<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>';
                            echo '<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>';
                            echo '</svg>';
                            echo '</button>';
                            echo '</a>';
                            echo '</div>';
                                if($cont == 4){
                                    echo "<br>";
                                    $cont == 0;
                                }
                        }
                ?>
             <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>   
            </div>
            <div class="footer"></div>
    </body>
</html>