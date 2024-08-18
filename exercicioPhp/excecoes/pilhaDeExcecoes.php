<?php
$n = 2.5;
function f1() 
{
    echo "Função 1 está antes de uma exceção!" ."<br>";
}
function f2($n)
{
    if(!is_int($n)) //is_int == verificar se a variável $n é do tipo inteiro.
    {
        throw new Exception("O valor não é do tipo esperado!");
    }
    else{
        echo "Função 2 está na execução de uma exceção!" ."<br>";
    }

    f3();
}

function f3()
{
    echo "Função 3 está depois da excecução da exceção!";
}

f1();
f2($n);
?>