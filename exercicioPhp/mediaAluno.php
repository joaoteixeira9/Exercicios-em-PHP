<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Situação Aluno: Aprovado ou Reprovado.</title>
</head>
<body>
    <?php
    $nota1 = $_GET['n1'];
    $nota2 = $_GET['n2'];
    $nota3 = $_GET['n3'];
    $nota4 = $_GET['n4'];

    echo "Nota do 1° bimestre: $nota1";
    echo "<br>";
    echo "Nota do 2° bimestre: $nota2";
    echo "<br>";
    echo "Nota do 3° bimestre: $nota3";
    echo "<br>";
    echo "Nota do 4° bimestre: $nota4";
    echo "<br>";

    $media = ($nota1+$nota2+$nota3+$nota4)/4;
    echo "Média do aluno: $media";
    $resultado = ($media >= 7)?"Aprovado!" : "Reprovado!";
    echo "<br><br>";
    echo $resultado;
    ?>
</body>
</html>