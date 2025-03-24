<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analise de numoros reais</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Analise de numoros reais</h1>
        <?php 
            $num = $_POST["num"];
            $int = (int) $num;
            $parte = $num - $int;
            echo "<p>O valor digitado foi: " . number_format($num, 3, ",", ".") ." <br>";
            echo "A parte inteira do valor digitado foi: ". number_format($int, 3, ",", ".") . "<br>";
            echo "A parte decimal do valor digitado foi: " . number_format($parte, 3, ",", ".") ."</p>";
        ?>

        <button onclick="javascript:history.go(-1)">Voltar a pagina anterior</button>
    </main>
</body>

</html>