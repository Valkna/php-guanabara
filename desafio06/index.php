<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Anatomia da Divisão</title>
</head>

<body>

    <?php
    $dividendo = $_GET['dividendo'] ?? 0;
    $divisor = $_GET['divisor'] ?? 1;
    ?>

    <main>
        <h1>Anatomia da Divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get"> <!-- envia os dados do formulário PHP -->
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?= $dividendo ?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?= $divisor ?>">
            <input type="submit" value="Dividir">
        </form>
    </main>

    <section>
        <?php
        $quociente = intdiv($dividendo, $divisor);
        $resto = $dividendo % $divisor;
        echo "O resuldado da divisão de $dividendo por $divisor é $quociente. E o resto da divisão é $resto."
        ?>
    </section>
    <table class="divisao">
        <tr>
            <td><?=$dividendo?></td>
            <td><?=$divisor?></td>
        </tr>
        <tr>
            <td><?=$resto?></td>
            <td><?=$quociente?></td>
        </tr>    
    </table>

</body>

</html>