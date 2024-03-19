<?php

// Função para determinar se um número é par ou ímpar e se é positivo, negativo ou zero
function determinarCaracteristicas($x) {
    if ($x == 0) {
        return "NULL";
    } elseif ($x % 2 == 0) {
        return "EVEN";
    } else {
        return "ODD";
    }
}

// Lê o valor inteiro N
$N = intval(fgets(STDIN));

// Loop para processar cada caso de teste
for ($i = 0; $i < $N; $i++) {
    // Lê o valor inteiro X
    $X = intval(fgets(STDIN));
    
    // Determina as características de X
    $caracteristicas = determinarCaracteristicas($X);
    
    // Determina se X é positivo ou negativo
    if ($X > 0) {
        echo $caracteristicas . " POSITIVE\n";
    } elseif ($X < 0) {
        echo $caracteristicas . " NEGATIVE\n";
    } else {
        echo $caracteristicas . "\n";
    }
}

?>