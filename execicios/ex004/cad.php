<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            // var_dump($_GET) //$_REQUEST = $_GET + $_POST + $_COOKIES
            $n = $_GET["nome"] ?? "Sem";
            $s = $_GET["sobrenome"] ?? "Nome";
            echo "<p> Olá, é um prazer te conher <strong>$n $s</strong>, este é o meu site </p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a pagina anterior</a></p>
    </main>
</body>

</html>