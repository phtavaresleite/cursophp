<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <section>
        <h1>Resultado Final</h1>
        <p>
            <?php 
        $number =$_GET['number'];
        echo "O numero digitado foi <strong>$number</strong> <br>";
        echo "O numero sucessor de $number é: " . $number + 1 . "<br>";
        echo "O numero antecessor de $number é: " . $number - 1 . "<br>";
        ?>
        </p>
        <button onclick="javascript:history.go(-1)">Voltar para a pagina anterior</button>
    </section>
</body>

</html>