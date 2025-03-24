<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
    $valor1 = $_GET["v1"] ?? 0;
    $valor2 = $_GET["v2"] ?? 0;
    $resultado = $valor1 + $valor2;
    ?>
    <main>
        <h1>Exercicio 5</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" value="<?= $valor1 ?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" value="<?= $valor2 ?>">
            <input type="submit" value="Somar">
        </form>
    </main>

    <section>
        <h2>Resultado da soma</h2>
        <?php 
        echo "<p>A soma entre os valores $valor1 e $valor2 é igual a $resultado</p>";
        ?>
    </section>
</body>

</html>