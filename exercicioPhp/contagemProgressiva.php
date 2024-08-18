<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contagem progressiva.</title>
</head>
<body>
    <?php
    $numero = 1;
    while($numero <=10){
        echo $numero;
        flush();
        ob_flush();
        sleep(1);
        $numero++;
        echo "<br>";
    }
    ?>
</body>
</html>