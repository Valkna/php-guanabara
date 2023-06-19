<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora de Tempo</title>
</head>

<body>

    <?php
    $total = $_REQUEST['segundos'] ?? 0;
    ?>

    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="segundos">Insira o total de segundos:</label>
            <input type="number" name="segundos" id="segundos" min="0" step="1" required value="<?= $total ?>">

            <input type="submit" value="Calcular">
        </form>
    </main>


    <?php
    $sobra = $total;
    //contagem semana
    $semana = (int)($sobra / 604_800);
    $sobra = $sobra % 604_800;

    //contagem dias
    $dia = (int)($sobra / 86_400);
    $sobra = $sobra % 86_400;

    //contagem horas
    $hora = (int)($sobra / 3_600);
    $sobra = $sobra % 3_600;

    //total minutos 
    $minuto = (int)($sobra / 60);
    $sobra = $sobra % 60;

    //total segundos
    $segundo = $sobra;
    ?>

    <section>
        <h2>Totalizando tudo:</h2>
        <p>Analisando o valor digitado, <?=$total?> segundos equivalem a: </p>
        <ul>
            <li><?=$semana?> semanas.</li>
            <li><?=$dia?> dias.</li>
            <li><?=$hora?> horas.</li>
            <li><?=$minuto?> minutos.</li>
            <li><?=$segundo?> segundos.</li>
        </ul>
    </section>

</body>

</html>