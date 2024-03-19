<?php

// Lê o valor inteiro N
$n = intval(fgets(STDIN));

// Inicializa os contadores para dentro e fora do intervalo
$dentro = 0;
$fora = 0;

// Loop para ler os valores X e contar quantos estão dentro e quantos estão fora do intervalo
for ($i = 0; $i < $n; $i++) {
    // Lê o valor inteiro X
    $x = intval(fgets(STDIN));
    
    // Verifica se o valor está dentro do intervalo [10,20]
    if ($x >= 10 && $x <= 20) {
        $dentro++;
    } else {
        $fora++;
    }
}

// Imprime a quantidade de valores dentro e fora do intervalo
echo "$dentro in\n$fora out\n";

?>