<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cálculo de raízes</title>
</head>

<body>
    <?php
    $numero = $_GET['number'] ?? 1;
    ?>


    <main>
        <h2>Informe um número:</h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="number">Número</label>
            <input type="number" name="number" id="number">
            <input type="submit" value="Calcular">
        </form>

        <?php
        $rquadrada = sqrt($numero);
        $rcubica = pow($numero, 1/3);
        echo "A raiz quadrada de $numero é " . number_format($rquadrada, 2, ",", ".") . ". Já a raiz cúbica é " . number_format($rcubica, 2, ",", ".") . ".";
        ?>

    </main>
</body>

</html>