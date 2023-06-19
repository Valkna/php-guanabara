<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício de PHP</title>
</head>

<body>
    <?php
    $valor1 = $_GET['v1'] ?? 0; //variáveis do programa
    $valor2 = $_GET['v2'] ?? 0;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get"> <!-- envia os dados do formulário PHP -->
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado da Soma</h2>
        <?php 
        $soma = $valor1 + $valor2;
        print "<p> A soma entre o Valor 1 e o Valor 2 é <strong>$soma</strong>.</>";
        
        ?>
    </section>
</body>

</html>