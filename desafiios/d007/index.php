<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6</title>
    <link rel="stylesheet" href="style.css">nk
</head>

<body>
    <?php
    $salario = $_GET["d1"] ?? 0;
    $salMin = 1518.00;
    ?>
    <main>
        <h1>Calculo de salário</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="d1">Digite o seu salario</label>
            <input type="number" name="d1" min="0" value="<?= $salario ?>" step="0.01">
            <input type="submit" value="Calcular">
            <p>Salário minimo atual:
                R$ <?= $salMin ?>
            </p>
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php
        $quoeciente = intdiv($salario, $salMin);
        $resto = $salario % $salMin;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "O seu salário de ". numfmt_format_currency($padrao,$salario,"BRL") ." equivale a $quoeciente salários mais " . numfmt_format_currency($padrao, $resto, "BRL");
        ?>
    </section>

</body>

</html>