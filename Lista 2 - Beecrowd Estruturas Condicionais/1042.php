<?php

    $ordenar = explode(" ", readline());
    $ordenar[0] = (int) $ordenar[0];
    $ordenar[1] = (int) $ordenar[1];
    $ordenar[2] = (int) $ordenar[2];
    $nova_ordenacao = $ordenar;
    sort($ordenar);
    foreach($ordenar as $value){
        echo "$value\n";
    }
    echo "\n";
    foreach($nova_ordenacao as $value){
        echo "$value\n";
    }

?>