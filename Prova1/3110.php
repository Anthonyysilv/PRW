<?php
    $M[5][5] = array();
    $valMin = trim(floatval(fgets(STDIN)));
    #i linha, j coluna
    for($i=0; $i<5; $i++){
        for($j=0; $j<5; $j++){
            $M[$i][$j] = trim(floatval(fgets(STDIN)));
        }
    }
    for($i=0; $i<5; $i++){
        for($j=0; $j<5; $j++){
            if($M[$i][$j] >= $id){
                echo "Valor Encontrado: ".number_format($M[$i][$j], 2, ".", ""). "Linha: $i Coluna $j";
            }
        }
    }
?>