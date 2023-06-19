<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Médias Aritméticas</title>
</head>

<body>
    <?php
        $valor1 = $_GET['valor1'] ?? '';
        $peso1 = $_GET['peso1'] ?? '';
        $valor2 = $_GET['valor2'] ?? '';
        $peso2 = $_GET['peso2'] ?? '';
    ?>

    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <h1>Médias Aritméticas</h1>
            <label for="">Valor 1</label>
            <input type="number" name="valor1" id="valor1" required value="<?=$valor1?>">
            <label for="">Peso 1</label>
            <input type="number" name="peso1" id="peso1" min="1" required value="<?=$peso1?>">
            <label for="">Valor 2</label>
            <input type="number" name="valor2" id="valor2" required value="<?=$valor2?>">
            <label for="">Peso 2</label>
            <input type="number" name="peso2" id="peso2" min="1" required value="<?=$peso2?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <?php 
        $mediasimples = ($valor1+$valor2)/2;
        $mediapond = ($valor1*$peso1 + $valor2*$peso2) / ($peso1+$peso2);
        ?>

        <ul>
            <h3>Para os valores <?=$valor1?> e <?=$valor2?> informados:</h3>
            <li>
            A média simples é <?=number_format($mediasimples, 1, ",", ".")?>.
            </li>
            <li>
            A média ponderada é <?= number_format($mediapond, 1, ",", ".")?>.
            </li>
        </ul>
    </section>

</body>

</html>