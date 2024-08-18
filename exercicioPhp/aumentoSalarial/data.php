<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aumento salarial</title>
</head>
    <!-- Difícil 11- As organizações CSM resolveram dar um aumento de salário aos seus colaboradores e lhe contrataram para desenvolver o programa que calculará os reajustes.  

    a. Faça um programa que recebe o salário de um colaborador e o reajuste segundo o seguinte critério, baseado no salário atual;
    b. Salários até R$ 280,00 (incluindo): aumento de 20%;
    c. Salários entre R$ 280,00 e R$700,00: aumento de 15%;
    d. Salários entre R$ 700,00 e R$ 1500,00: aumento de 10%;
    e. Salários de R$ 1500,00 em diante: aumento de 5%
    Após o aumento ser realizado; informe na tela;

    a. O salário antes do reajuste;
    b. O percentual de aumento aplicado;
    c. O valor do aumento;
    d. O novo salário, após o aumento.   -->
<body>
    <?php
    $nomeColaborador = $_POST['nome'];
    $salarioAtual = $_POST['salarioAtual'];
    echo "Nome: ".$nomeColaborador ."<br><br>";

    if($salarioAtual <= 280){
        $porcentagemAumento = 0.20;
        $valorAumento = $salarioAtual*$porcentagemAumento;
        $novoSalario = $salarioAtual + $valorAumento;
    }
    elseif($salarioAtual > 280 && $salarioAtual <= 700){
        $porcentagemAumento = 0.15;
        $valorAumento = $salarioAtual*$porcentagemAumento;
        $novoSalario = $salarioAtual + $valorAumento;
    }
    elseif($salarioAtual > 700 && $salarioAtual <= 1500){
        $porcentagemAumento = 0.10;
        $valorAumento = $salarioAtual*$porcentagemAumento;
        $novoSalario = $salarioAtual + $valorAumento;
    }
    else{
        $porcentagemAumento = 0.05;
        $valorAumento = $salarioAtual*$porcentagemAumento;
        $novoSalario = $salarioAtual + $valorAumento;
    }
    echo "Salário antes do reajuste: " .number_format($salarioAtual, 2, ",","."). "<br>";
    echo "Porcentagem do aumento: ".$porcentagemAumento. "<br>";
    echo "Valor do aumento: " .number_format($valorAumento, 2, ",","."). "<br>";
    echo "Salário após o reajuste: " .number_format($novoSalario, 2, ",","."). "<br>";
    ?>
</body>
</html>