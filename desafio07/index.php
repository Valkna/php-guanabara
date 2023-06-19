<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Salário Mínimo</title>
</head>

<body>

    <?php
    $salario = $_GET['salario'] ?? 0;
    $minimo = 1_380.60;
    ?>

    <main>
        <h1>Salário Mínimo</h1>
        <h4>O valor do salário mínimo atualmente é de R$ 1.300,00.</h4>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get"> <!-- envia os dados do formulário PHP -->
            <label for="salario">Insira o valor do seu salário</label>
            <input type="text" name="salario" id="salario" step="0.01" value="<?= $salario ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <?php
        $quociente = intdiv($salario, $minimo);
        $resto = $salario % $minimo;
        echo "O seu salário é " . number_format($salario, 2, ",", ".") . " e isso equivale a " . number_format($quociente, 0, ',', '.') . " salários mínimos mais R$ $resto reais."
        ?>
    </section>
</body>

</html>