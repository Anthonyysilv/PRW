<?php

// Função para imprimir os 6 valores ímpares consecutivos a partir de X
function imprimirImparesConsecutivos($x) {
    $contador = 0; // Contador para controlar quantos números ímpares foram impressos

    while ($contador < 6) {
        if ($x % 2 != 0) {
            echo $x . "\n";
            $contador++;
        }
        $x++; // Incrementa para o próximo número
    }
}

// Lê o valor inteiro X
$x = intval(fgets(STDIN));

// Verifica se X é um número positivo
if ($x > 0) {
    // Chama a função para imprimir os 6 valores ímpares consecutivos a partir de X
    imprimirImparesConsecutivos($x);
} else {
    echo "O valor de X deve ser um número inteiro positivo.\n";
}

?>