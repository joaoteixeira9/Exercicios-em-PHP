<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>
<body>
    <?php
    $inicio = $_POST['inicio'];
    $final = $_POST['final'];
    $incremento = $_POST['incremento'];

    echo "Início da contagem: $inicio <br>";
    echo "Final da contagem: $final <br>";


    switch($incremento){
        case 1:
            while($inicio <= $final){
                echo $inicio ." ";
                $inicio += 2;
            }break;
        case 2:
            while($inicio <= $final){
                echo $inicio ." ";
                $inicio += 3;
            }break;
        case 3:
            while($inicio <= $final){
                echo $inicio ." ";
                $inicio += 4;
            }break;
        default:
        echo "Erro!";
    }
    ?>
</body>
</html>