<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Reajustar Preços</title>
</head>

<body>

    <?php
    $preco = $_GET['preco'] ?? '0';
    $porcentagem = $_GET['porcentagem'] ?? '0';
    ?>

    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="">Informe o valor do produto:</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?=$preco?>">

            <label for="porcentagem">Informe o percentual de reajuste: (<strong><span id="percent"></span>%</strong>)</label>
            <input type="range" name="porcentagem" id="porcentagem" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$porcentagem?>">
            
            <input type="submit" value="Calcular">
        </form>

        <?php 
        $novopreco = $preco + ($preco * $porcentagem/100);
        echo "O preço reajustado do produto é R$ " . number_format($novopreco, 2, ",", ".") . ".";        
        ?>

        <script>
            mudaValor() //chama a função já no início do carregamento da página 
            function mudaValor() {
                percent.innerText = porcentagem.value;

            }
        </script>
    </main>
</body>

</html>