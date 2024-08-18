<?php
$num = [54,26,93,17,77,31,44,55,20];
$ordem = count($num);

for ($i = 0; $i < $ordem - 1; $i++){
    for ($j = 0; $j < $ordem -$i -1; $j++){
        $k = $j +1;
    
        if($num[$k] < $num[$j]){
            $auxiliar = $num[$j];
            $num[$j] = $num[$k];
            $num[$k] = $auxiliar;
    }

    print_r($num )."\n";
}
}
?>