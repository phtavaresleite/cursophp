<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <h1>Sua quantidade em dollar hoje:</h1>
        <?php
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);

        // var_dump($dados); // imprimir
            
        $cotacao = $dados["value"][0]["cotacaoCompra"];
        
        $reais = $_GET["reais"];
        $dolar = $reais / $cotacao;
        
        // echo "Seus R$". number_format($reais, 2, ",", ".") . " equivalem a <strong>US$" . number_format($result, 2, ",", "."). "</strong> <br>";
        // echo "Valor do dolar hoje: " . number_format($dolar, 2, "," , ".");

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        echo "<p>Seus " . numfmt_format_currency($padrao, $reais, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar,"USD") ."</strong><br> Cotação atual do dolar: " . numfmt_format_currency($padrao, $cotacao,"USD") . "</p>";
        ?>
        <button onclick="javascript:history.go(-1)">
            Voltar a pagina anterior
        </button>
    </section>
</body>

</html>