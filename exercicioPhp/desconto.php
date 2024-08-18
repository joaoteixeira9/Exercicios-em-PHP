<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compre um item á vista e ganhe 10% de desconto!</title>
</head>
<body>
    <?php
    $precoProduto = $_GET['pp'];
    echo "Valor do Produto: " . number_format($precoProduto, 2, "," , "."); 
    echo "<br>";

    $descontoAVista = $precoProduto * 0.1;
    echo "Valor do desconto: " .number_format($descontoAVista, 2, "," , "."); 
    echo "<br>";
    
    $produtoComDesconto = $precoProduto - $descontoAVista;
    echo "Valor do produto com desconto: " .number_format($produtoComDesconto, 2, "," , "."); 
    ?>
</body>
</html>