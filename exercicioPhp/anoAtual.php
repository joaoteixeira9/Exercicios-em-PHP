<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qual foi o ano antes ?</title>
</head>
<body>
    <?php
    $ano = $_GET['a'];
    echo "O seu ano atual é $ano";
    echo "<br>";
    echo "O ano anterior ao atual é: " . --$ano;
    echo "<br>";
    echo "O ano seguinte ao atual é: " . $ano += 2;
    ?>
</body>
</html>