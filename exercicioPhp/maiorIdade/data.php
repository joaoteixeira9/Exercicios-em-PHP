<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confira se você pode dirigir!</title>
</head>
<body>
    <?php
    $anoNascimento = $_POST['anoNascimento'];
    $idade = date ("Y") - $anoNascimento;

    echo "Você nasceu em $anoNascimento e tem $idade anos!<br>";
    if ($idade >= 18){
        $dirigirVotar = "Você já pode dirigir e votar!";
    }
    else if($idade == 17 || $idade == 16){
        $dirigirVotar = "Você não pode dirigir mas seu voto é opcional!";
    }
    else {
        $dirigirVotar = "Você não pode dirigir e não pode votar!";
    }
    echo $dirigirVotar;
    ?>
</body>
</html>