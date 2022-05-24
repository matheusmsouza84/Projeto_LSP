<?php
class Conexao{
    private static $local = "localhost";
    private static $user = "root";
    private static $senha = "";
    private static $banco = "banco_loja";
    private static function abrir(){
        $conn = mysqli_connect(self::$local , self::$user, self::$senha , self::$banco);
        if( $conn ) { 
            return $conn;
        }else{
            return NULL;
        }
    }
    private static function fechar($conn){
        if( $conn ){
            mysqli_close($conn);
        }
    }
    public static function consultar($query){
        $conn = self::abrir();
        if( $conn ){
            $result = mysqli_query($conn, $query);
            self::fechar($conn);
            return $result;
        }
    }
    public static function executar($query){
        $conn = self::abrir();
        if( $conn ){
            $result = mysqli_query($conn, $query);
            self::fechar($conn);
        }
    }
}
?>