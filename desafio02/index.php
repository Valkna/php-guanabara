<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sorteador</title>
</head>

<body>
    <main>
        <h1>Gerando um número aleatório...</h1>

        <?php
        $min = 1;
        $max = 100;
        $resultado = mt_rand($min, $max);
        echo "O número gerado é $resultado";
        ?> <br><br>
        <button onclick="javascript:document.location.reload()">Gerar novo número</button>
    </main>
</body>

</html>