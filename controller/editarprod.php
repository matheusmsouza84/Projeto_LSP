<?php
session_start();
include_once "../model/clsConexao.php";
include_once "../DAO/clsProdutosDAO.php";
include_once "../api.php";

    $idprod = $_SESSION['prodid'];
    $nome = $_POST['nome'];
    $genero = $_POST['genero'];
    $preco = $_POST['preco'];
    $cripto = $preco/$moeda;
    $quantidade = $_POST['quantidade'];
    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
    $novo_nome = $nome . $extensao;
    $diretorio = "../imagens/";
    if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome)){
        $query = "UPDATE produtos SET nome = '$nome', genero = '$genero' , preco = '$preco', quantidade = '$quantidade', cripto = '$cripto', imagem = '$novo_nome'  WHERE id = '$idprod'";

        $result = Conexao::executar($query);
        header("Location: ../estoque.php");
    }else

    echo 'deu ruim';

   // echo $idprod."<br>";
   // echo $nome."<br>";
       
    
   

?>