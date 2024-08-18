<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $n = $_POST['numeroTabuada'];
    $multiplicador = 1;

    while($multiplicador <= 10){
    $resultado = $n * $multiplicador;
    echo "$n x $multiplicador = $resultado";
    echo "<br>";
    $multiplicador++;
    }
    
    ?>
</body>
</html>