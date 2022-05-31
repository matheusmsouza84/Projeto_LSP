<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Teste de api</title>
    </head>
    <body>
    <?php
        $url = "https://api.coingecko.com/api/v3/simple/price?ids=dogecoin&vs_currencies=BRL";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        $resultado = json_decode(curl_exec($ch));

        //var_dump($resultado);

        foreach ($resultado ->dogecoin as $moeda) {
            //var_dump($moeda);
            echo "Preço: " . $moeda . "<br>";            
            echo "<hr>";
            return $moeda;
        }
        ?>
    </body>
</html>