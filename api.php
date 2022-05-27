<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Teste de api</title>
    </head>
    <body>
        <?php
        $url = 'https://pro-api.coinmarketcap.com/v2/cryptocurrency/quotes/latest?id=1';
        //$parameters = [
       // 'start' => '1',
       // 'limit' => '3',
       // 'convert' => 'BRL'
        //];

        $headers = [
        'Accepts: application/json',
        'CMC_PRO_API_KEY: 5b7d49c1-a635-4600-9d42-7ad344edb53c'
        ];

        $curl = curl_init($url);
        curl_setopt($curl,CURLOPT_HTTPHEADER,$headers); 
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
        
        $resultado = json_decode(curl_exec($curl));

        foreach($resultado -> data as $moeda){

            var_dump($moeda);
            echo "Moeda:" .$moeda-> name . "<br>";
            echo "Moeda:" .$moeda-> symbol .  "<br>";
            echo "Moeda:" .$moeda-> symbol .  "<br>";

            foreach($moeda -> quoate -> USD  as $valor){
                echo "Moeda:" .$moeda-> price .  "<br>";
            }

            
        }
        ?>
    </body>
</html>