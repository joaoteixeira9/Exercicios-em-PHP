<?php
function divisao($dividendo, $divisor)
{
    try{
        if($divisor == 0){
            throw new RangeException("O número não pode ser dividido por 0");
        }
        $resultado = $dividendo / $divisor;
        echo "O resultado é: " .$resultado .".";
    }catch(Exception $e){
        echo "O número não pode ser divido por 0!";
    }

    finally{
        echo "<br><br> Tratando de Exceções!";
    }
}

divisao(10,5);
?>