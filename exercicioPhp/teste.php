<?php
// Solicita ao usuário que insira um número
echo "Digite um número inteiro positivo: ";
$numero = 15;

// Verifica se o número é positivo
if ($numero <= 0) {
    echo "Por favor, insira um número inteiro positivo.\n";
    exit;
}

$soma = 0;

// Calcula a soma, exceto os números divisíveis por 3
for ($i = 1; $i <= $numero; $i++) {
    if ($i % 3 != 0) {
        $soma += $i;
    }
}

// Exibe o resultado
echo "A soma de todos os números entre 1 e $numero, exceto os divisíveis por 3, é: $soma \n";
?>
