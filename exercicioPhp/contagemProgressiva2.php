<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contagem progressiva.</title>
</head>
<body>
    <?php
    $contador = 1;
    do{
        echo $contador;
        $contador++;
        echo "<br>";
    }while($contador <=10)
    ?>
</body>
</html>