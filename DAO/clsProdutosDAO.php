<?php
    class ProdutoDAO{

    public static function getProdutos(){
        $query = "SELECT id, nome, genero, preco, quantidade, cripto, imagem FROM produtos";
        $result = Conexao::consultar($query);
        $lista = new ArrayObject();

        while( list($id, $nome, $genero, $preco, $quantidade, $cripto, $imagem)
            = mysqli_fetch_row($result)){
                $prod = new Produto();
                $prod->id = $id;
                $prod->nome = $nome;
                $prod->genero = $genero;
                $prod->preco = $preco;
                $prod->quantidade = $quantidade;
                $prod->cripto = $cripto;
                $prod->imagem = $imagem;
                $lista->append($prod);
            }
            return $lista;
    }

    public static function getProdutosById($idprod){
        $query = 'SELECT id, nome, genero, preco, quantidade, cripto, imagem FROM produtos WHERE id ='.$idprod;
        $result = Conexao::consultar($query);
        list($id, $nome, $genero, $preco, $quantidade, $cripto, $imagem) = mysqli_fetch_row($result);
            $prod = new Produto();
            $prod->id = $id;
            $prod->nome = $nome;
            $prod->genero = $genero;
            $prod->preco = $preco;
            $prod->quantidade = $quantidade;
            $prod->cripto = $cripto;
            $prod->imagem = $imagem;
            
        return $prod;
    }
}

?>