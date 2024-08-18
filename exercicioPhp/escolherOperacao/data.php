<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolha a operação com um número!</title>
</head>
<body>
    <?php
    $numero = $_POST['numero'];
    $operacao = $_POST['oper'];
    echo "Número escolhido foi $numero <br>";
    switch($operacao){
        case 1:
            $resposta = $numero * 2;
            break;
        case 2:
            $resposta = sqrt($numero);
            break;
        case 3:
            $resposta = $numero ** 3;
            break;        
    }
    echo "O resultado da operação foi: ".$resposta;
    ?>
</body>
</html>