<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <main>
        <?php
        
        $number = $_REQUEST["number"];

        $predecessor = $number - 1;
        $sucessor = $number + 1;

        echo "O número informado é $number. Seu predecessor é $predecessor e seu sucessor é $sucessor.";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>

</html>