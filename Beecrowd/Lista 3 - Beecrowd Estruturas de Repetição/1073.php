<?php

// Função para calcular e imprimir o quadrado de cada número par de 1 até N
function quadradoDosPares($N) {
    for ($i = 1; $i <= $N; $i++) {
        if ($i % 2 == 0) {
            $quadrado = $i * $i;
            echo "$i^2 = $quadrado\n";
        }
    }
}

// Lê o valor inteiro N
$N = intval(fgets(STDIN));

// Verifica se N está dentro do intervalo especificado
if ($N > 5 && $N < 2000) {
    // Chama a função para calcular e imprimir o quadrado dos números pares de 1 até N
    quadradoDosPares($N);
} else {
    echo "O valor de N deve estar entre 5 e 2000.\n";
}

?>