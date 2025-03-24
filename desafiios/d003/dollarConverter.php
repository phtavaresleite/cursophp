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
        $reais = $_GET["reais"];
        $dolar = 5.681;
        $result = $reais / $dolar;
        
        // echo "Seus R$". number_format($reais, 2, ",", ".") . " equivalem a <strong>US$" . number_format($result, 2, ",", "."). "</strong> <br>";
        // echo "Valor do dolar hoje: " . number_format($dolar, 2, "," , ".");

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        echo "Seus " . numfmt_format_currency($padrao, $reais, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar,"USD") ."";
        ?>
        <button onclick="javascript:history.go(-1)">
            Voltar a pagina anterior
        </button>
    </section>
</body>

</html>