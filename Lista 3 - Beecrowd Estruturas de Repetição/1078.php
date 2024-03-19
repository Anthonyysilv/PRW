<?php

// Lê o valor inteiro N
$N = intval(fgets(STDIN));

// Verifica se N está dentro do intervalo especificado
if ($N > 2 && $N < 1000) {
    // Loop de 1 a 10 para mostrar a tabuada de N
    for ($i = 1; $i <= 10; $i++) {
        // Calcula o resultado da multiplicação
        $resultado = $i * $N;
        // Imprime a tabuada
        echo "$i x $N = $resultado\n";
    }
} else {
    echo "O valor de N deve estar entre 2 e 1000.\n";
}

?>