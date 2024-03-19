<?php

// Lê o valor inteiro N
$N = intval(fgets(STDIN));

// Loop para imprimir as linhas
for ($i = 1; $i <= $N; $i++) {
    $quadrado = $i * $i;
    $cubo = $i * $i * $i;
    echo "$i $quadrado $cubo\n";
}

?>