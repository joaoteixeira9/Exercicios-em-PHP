<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $nota1 = $_POST['notas1'];
    $nota2 = $_POST['notas2'];
    $nota3 = $_POST['notas3'];
    $nota4 = $_POST['notas4'];
    echo "Notas:<br>";
    echo $nota1 ."<br>";
    echo $nota2 ."<br>";
    echo $nota3 ."<br>";
    echo $nota4 ."<br><br>";
    $media = ($nota1+$nota2+$nota3+$nota4) / 4;
    echo "Média:<br>";
    echo $media ."<br><br>";
    if ($media >= 7){
        $aprovacao = "Aluno(a) aprovado(a)!";
    }
    elseif ($media == 5 || $media == 6){
        $aprovacao = "Aluno(a) estado de recuperação!";
    }
    else{
        $aprovacao = "Aluno(a) retido(a)!";
    }
    echo $aprovacao;
    ?>
</body>
</html>