<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Máquina do Tempo</title>
</head>

<body>

    <?php
    $dataatual = date("Y");
    $anonascimento = $_GET['anonascimento'] ?? 2000;
    $anoinformado = $_GET['anoinformado'] ?? $dataatual;
    ?>

    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="">Informe seu ano de nascimento:</label>
            <input type="number" name="anonascimento" id="anonascimento" min="1900" max="<?=($dataatual-1)?>" value="<?=$anonascimento?>">
            <label for="">Quem saber a sua idade em que ano? (atualmente estamos em <?=$dataatual?>)</label>
            <input type="number" name="anoinformado" id="anoinformado" min="1900" value="<?=$anoinformado?>">
            <input type="submit" value="Qual será a minha idade?">
        </form>
    </main>


    <section>
        <?php
        $idade = $anoinformado - $anonascimento;
        echo "Quem nasceu em $anonascimento terá $idade anos em $anoinformado. ";
        ?>
    </section>
</body>

</html>