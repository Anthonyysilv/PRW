<?php
#10% de erro, resolverei depois.
    $count = 0;
    for ($i = 1; $i <= 6; $i++){
        $num = (int)readline();
        if ($num > 0){
            $count++;
        }
    }
    echo "{$count} valores positivos\n";

?>