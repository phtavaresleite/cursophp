<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <h1>Trabalhando com numeros aleatorios</h1>
        <p>Gerando um nuermo aleatorio entre 0 e 100</p>
        <?php 
        echo "O numero aleatorio gerado foi " . rand(0, 100);
    ?>
        <button onclick="javascript:document.location.reload()">Gerar outro</button>
    </section>
</body>

</html>