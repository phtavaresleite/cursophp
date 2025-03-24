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
    $dividendo = $_GET["d1"] ?? 0;
    $divisor = $_GET["d2"] ?? 1;
    ?>
    <main>
        <h1>Estrutura da divisao</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="d1">Dividendo</label>
            <input type="number" name="d1" placeholder="Dividendo" min="0" value=" <?= $dividendo ?>">
            <label for="d2">Divisor</label>
            <input type="number" name="d2" placeholder="Divisor" min="1" value=" <?= $divisor ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h1>Resultado da divisao</h1>
        <?php
        $quoeciente = $dividendo / $divisor;
        $resto = $dividendo % $divisor;
        ?>

        <table class="divisao">
            <tr>
                <td>
                    <?= $dividendo ?>
                </td>
                <td><?= $divisor ?></td>
            </tr>
            <tr>
                <td><?= $resto ?></td>
                <td><?= $quoeciente ?></td>
            </tr>
        </table>
    </section>

</body>

</html>