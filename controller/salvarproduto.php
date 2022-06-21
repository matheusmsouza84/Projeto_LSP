<?php
    include_once "../model/clsConexao.php";
    include_once "../api.php";
    $nome = $_POST['nome'];
    $genero = $_POST['genero'];
    $preco = $_POST['preco'];
    $cripto = $preco/$moeda;
    $quantidade = $_POST['quantidade'];
    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
    $novo_nome = $nome . $extensao;
    $diretorio = "../imagens/";
    if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome)){
        $query = "INSERT INTO produtos (nome, genero, preco, quantidade, cripto, imagem) VALUES ('$nome', '$genero', '$preco', '$quantidade', '$cripto', '$novo_nome')";

        $result = Conexao::executar($query);
        header("Location: ../cadastro_produto.php");
    }else
    echo 'deu ruim'; 
?>