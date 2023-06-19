<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {height: 80px; margin: 5px;}
    </style>
    <title>Caixa Eletrônico</title>
</head>

<body>

    <?php 
    $saque = $_REQUEST['saque'] ?? 0;    
    ?>
    
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="saque">Qual valor você deseja sacar?</label>
            <input type="number" name="saque" id="saque" step="5" required>
            <p style="font-size: 0.7em">Notas disponíveis: R$100, R$50, R$10 e R$5</p>

            <input type="submit" value="Sacar">
        </form>
    </main>

    <?php
    $resto = $saque;
    //saque de R$100
    $total100 = floor($resto / 100);
    $resto %= 100;

    //saque de R$50
    $total50 = floor($resto / 50);
    $resto %= 50;

    //saque de R$10
    $total10 = floor($resto / 10);
    $resto %= 10;

    //saque de R$5
    $total5 = floor($resto / 5);
    $resto %= 5;
    ?>

    <section>
        <h2>Saque de R$ <?=$saque?> realizado com sucesso</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="Nota de 100" class="nota"><?= $total100?></li>
            <li><img src="imagens/50-reais.jpg" alt="Nota de 50" class="nota"><?= $total50?></li>
            <li><img src="imagens/10-reais.jpg" alt="Nota de 10" class="nota"><?= $total10?></li>
            <li><img src="imagens/5-reais.jpg" alt="Nota de 5" class="nota"><?= $total5?></li>
        </ul>
    </section>

</body>

</html>