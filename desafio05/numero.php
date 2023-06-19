<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Analisador de número real</h1>
        <?php 
            $num = $_POST["n"] ?? 0;

            $int = (int) $num;
            $fra = $num - $int;

            echo "<p> Analisando o número <strong>" . number_format($num, 3, ",", ".") . " </strong> informado pelo usuário.</p>";
            echo "<ul><li>A parte inteira é " . number_format($int, 3, ",", ".") . ".</li>";
            echo "<li> E a parte fracionária é " . number_format($fra, 3, ",", ".") . ".</li></ul>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>