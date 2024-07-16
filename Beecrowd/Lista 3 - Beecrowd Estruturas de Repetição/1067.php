<?php

// Função para imprimir os ímpares de 1 até X
function imprimirImpares($x) {
    for ($i = 1; $i <= $x; $i++) {
        if ($i % 2 != 0) {
            echo $i . "\n";
        }
    }
}

// Lê o valor inteiro X
$x = intval(fgets(STDIN));

// Verifica se X está dentro do intervalo especificado
if ($x >= 1 && $x <= 1000) {
    // Chama a função para imprimir os ímpares de 1 até X
    imprimirImpares($x);
} else {
    echo "O valor de X deve estar entre 1 e 1000.\n";
}

?>