<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <?php
    echo "<form action='data.php' method='post'>";
    $n = 1;
    echo "<label for='numeroTabuada'>Numero tabuada </label>";
    echo "<select id='numeroTabuada' name='numeroTabuada'>";
    while($n <=10){
        echo "<option value='$n'>$n</option>";
        $n++;
        echo "<br>";
    }
    echo "</select>";
    echo "<button type='submit'>Enviar</button>";
    echo "</form>";
    ?>
</body>
</html>