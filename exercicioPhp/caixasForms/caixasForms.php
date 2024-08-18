<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Notas</title>
</head>
<body>
    <form action="caixasForms2.php" method="post">
        <?php
        $n = 1;
        while($n <= 4){
            echo "Nota do $n ° Bimestre: <input type='number' id='notas$n' name='notas$n' min='0' max='10' required> <br>";
            $n++;
        }
        ?>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
