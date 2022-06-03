<?php
    class ProdutoDAO{

    public static function getProdutos(){
        $query = "SELECT id, nome, genero, preco, quantidade, cripto FROM produtos";
        $result = Conexao::consultar($query);
        $lista = new ArrayObject();

        while( list($id, $nome, $genero, $preco, $quantidade, $cripto)
            = mysqli_fetch_row($result)){
                $prod = new Produto();
                $prod->id = $id;
                $prod->nome = $nome;
                $prod->genero = $genero;
                $prod->preco = $preco;
                $prod->quantidade = $quantidade;
                $prod->cripto = $cripto;
                $lista->append($prod);
            }
            return $lista;
    }

    public static function getProdutosById($idprod){
    $query = 'SELECT id, nome, genero, preco, quantidade, cripto FROM produtos WHERE id ='.$idprod;
        $result = Conexao::consultar($query);
        list($id, $nome, $genero, $preco, $quantidade, $cripto) = mysqli_fetch_row($result);
            $prod = new Produto();
            $prod->id = $id;
            $prod->nome = $nome;
            $prod->genero = $genero;
            $prod->preco = $preco;
            $prod->quantidade = $quantidade;
            $prod->cripto = $cripto;
            
        return $prod;
    }
}

?>